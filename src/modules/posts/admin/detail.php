<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$id = $nv_Request->get_int('id', 'get', 0);

if ($nv_Request->get_string('action', 'post', '') == 'get_cv_list') {
    // Kiểm tra session admin
    if (!defined('NV_IS_FILE_ADMIN')) {
        nv_jsonOutput([
            'status' => 'error',
            'message' => 'Session expired'
        ]);
    }

    $post_id = $nv_Request->get_int('post_id', 'post', 0);
    $checkss = $nv_Request->get_string('checkss', 'post', '');

    if ($checkss != md5($post_id . NV_CHECK_SESSION)) {
        nv_jsonOutput([
            'status' => 'error',
            'message' => 'Invalid security token'
        ]);
    }

    try {
        // Lấy danh sách CV có chọn bài viết này
        $sql = 'SELECT id, title, link FROM ' . NV_PREFIXLANG . '_cvs WHERE FIND_IN_SET(' . $post_id . ', selected_post_ids)';
        $result = $db->query($sql);
        $cv_list = [];
        
        while ($cv = $result->fetch()) {
            $cv['preview_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=cvs&' . NV_OP_VARIABLE . '=detail&id=' . $cv['id'];
            $cv_list[] = $cv;
        }

        nv_jsonOutput([
            'status' => 'success',
            'data' => $cv_list
        ]);
    } catch (PDOException $e) {
        nv_jsonOutput([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
    }
}

if ($id == 0) {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id=' . $id;
$row = $db->query($sql)->fetch();

if (empty($row)) {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

$page_title = $nv_Lang->getModule('detail') . ' #' . $id . ': ' . $row['title'];

// Thêm các URL và checkss cho nút sửa và xóa
$row['checkss'] = md5($row['id'] . NV_CHECK_SESSION);
$row['edit_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=edit&amp;id=' . $row['id'];
$row['delete_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=delete&amp;id=' . $row['id'];

// Format lại thời gian
$row['created_at'] = date('d/m/Y H:i', strtotime($row['created_at']));
$row['updated_at'] = date('d/m/Y H:i', strtotime($row['updated_at']));

// Xử lý ảnh
if (!empty($row['image']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['image'])) {
    $row['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['image'];
}

// Xử lý trạng thái
$row['status_text'] = $nv_Lang->getModule('status_' . $row['status']);

// Lấy số lượng CV đã nộp cho bài viết này
$sql = 'SELECT COUNT(*) as total FROM ' . NV_PREFIXLANG . '_cvs WHERE FIND_IN_SET(' . $id . ', selected_post_ids)';
$cv_count = $db->query($sql)->fetch();
$row['cv_count'] = $cv_count['total'];

// Lấy 5 bài viết ngẫu nhiên không trùng lặp
$sql = 'SELECT id, title, description, image 
        FROM ' . NV_PREFIXLANG . '_' . $module_data . ' 
        WHERE id != ' . $id . '
        GROUP BY id, title, description, image
        ORDER BY RAND()
        LIMIT 6';
$related_posts = $db->query($sql)->fetchAll();

// Xử lý ảnh cho các bài viết liên quan
foreach ($related_posts as &$post) {
    if (!empty($post['image']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $post['image'])) {
        $post['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $post['image'];
    }
    $post['link'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=detail&amp;id=' . $post['id'];
}

$xtpl = new XTemplate('detail.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $row);
$xtpl->assign('PAGE_TITLE', $page_title);
$xtpl->assign('RELATED_POSTS', $related_posts);

// Parse ảnh nếu có
if (!empty($row['image'])) {
    $xtpl->parse('main.image');
}

// Parse trạng thái
if ($row['status'] == 1) {
    $xtpl->parse('main.active');
} else {
    $xtpl->parse('main.inactive');
}

// Parse các bài viết liên quan
$processed_ids = []; // Mảng lưu các ID đã xử lý
foreach ($related_posts as $post) {
    if (!in_array($post['id'], $processed_ids)) { // Kiểm tra nếu ID chưa được xử lý
        $xtpl->assign('POST', $post);
        $xtpl->parse('main.related_posts.loop');
        $processed_ids[] = $post['id']; // Thêm ID vào mảng đã xử lý
    }
}
if (!empty($processed_ids)) {
    $xtpl->parse('main.related_posts');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
