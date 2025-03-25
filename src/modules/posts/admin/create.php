<?php

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

// Khởi tạo giá trị mặc định cho bài viết mới
$row = [
    'id' => 0,
    'title' => '',
    'description' => '',
    'image' => '',
    'content' => '',
    'status' => 1,
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
];

$error = [];

// Xử lý khi submit form
if ($nv_Request->get_int('save', 'post') == 1) {
    $row['title'] = nv_substr($nv_Request->get_title('title', 'post', ''), 0, 250);
    $row['description'] = $nv_Request->get_textarea('description', '', 'br', 1);
    $row['content'] = $nv_Request->get_editor('content', '', NV_ALLOWED_HTML_TAGS);
    $row['status'] = $nv_Request->get_int('status', 'post', 1);
    
    // Xử lý ảnh
    $image = $nv_Request->get_string('image', 'post', '');
    if (nv_is_file($image, NV_UPLOADS_DIR . '/' . $module_upload)) {
        $row['image'] = substr($image, strlen(NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/'));
    }

    // Validate dữ liệu
    if (empty($row['title'])) {
        $error[] = $lang_module['error_title'];
    } else {
        // Kiểm tra trùng lặp tiêu đề
        $sql = 'SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE title = :title';
        $sth = $db->prepare($sql);
        $sth->bindParam(':title', $row['title'], PDO::PARAM_STR);
        $sth->execute();
        
        if ($sth->fetchColumn()) {
            $error[] = $lang_module['error_save'];
        }
    }

    if (empty($error)) {
        try {
            // Thêm bài viết mới
            $stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . ' 
                (title, description, image, content, status) 
                VALUES (:title, :description, :image, :content, :status)');

            $stmt->bindParam(':title', $row['title'], PDO::PARAM_STR);
            $stmt->bindParam(':description', $row['description'], PDO::PARAM_STR);
            $stmt->bindParam(':image', $row['image'], PDO::PARAM_STR);
            $stmt->bindParam(':content', $row['content'], PDO::PARAM_STR);
            $stmt->bindParam(':status', $row['status'], PDO::PARAM_INT);

            if ($stmt->execute()) {
                nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Post', 'ID: ' . $db->lastInsertId(), $admin_info['userid']);
                nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
            }
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
            $error[] = $lang_module['error_save'];
        }
    }
}

// Xử lý editor
if (defined('NV_EDITOR')) {
    require_once NV_ROOTDIR . '/' . NV_EDITORSDIR . '/' . NV_EDITOR . '/nv.php';
}

if (defined('NV_EDITOR') and nv_function_exists('nv_aleditor')) {
    $row['content'] = nv_aleditor('content', '100%', '300px', $row['content']);
} else {
    $row['content'] = '<textarea style="width:100%;height:300px" name="content">' . $row['content'] . '</textarea>';
}

// Nếu là HTML thì chuyển đổi về dạng hiển thị trong textarea
if (!empty($row['description'])) {
    $row['description'] = nv_htmlspecialchars(nv_br2nl($row['description']));
}

$xtpl = new XTemplate('content.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $row);
$xtpl->assign('UPLOADS_DIR_USER', NV_UPLOADS_DIR . '/' . $module_upload);

// Xuất lỗi
if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$page_title = $nv_Lang->getModule('add');
$xtpl->assign('PAGE_TITLE', $page_title);

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';