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

// Thêm dòng này để load file ngôn ngữ
$lang_module = \NukeViet\Core\Language::$lang_module;

$id = $nv_Request->get_int('id', 'get', 0);

// Thêm xử lý cho action save_selection
if ($nv_Request->get_string('action', 'post', '') == 'save_selection') {
    $cv_id = $nv_Request->get_int('cv_id', 'post', 0);
    $post_ids = $nv_Request->get_string('post_ids', 'post', '');
    $checkss = $nv_Request->get_string('checkss', 'post', '');

    if ($checkss != md5($cv_id . NV_CHECK_SESSION)) {
        nv_jsonOutput(array(
            'status' => 'error',
            'message' => 'Invalid checksum'
        ));
    }

    try {
        // Xử lý chuỗi post_ids thành mảng và lọc giá trị số
        $post_ids_array = !empty($post_ids) ? array_filter(explode(',', $post_ids), function($value) {
            return is_numeric($value) && $value > 0;
        }) : array();
        
        if (!empty($post_ids_array)) {
            // Cập nhật danh sách bài viết đã chọn
            $post_ids_str = implode(',', $post_ids_array);
            $db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . ' SET selected_post_ids = ' . $db->quote($post_ids_str) . ' WHERE id = ' . $cv_id);
        } else {
            // Xóa hết lựa chọn
            $db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . ' SET selected_post_ids = NULL WHERE id = ' . $cv_id);
        }
        
        nv_jsonOutput(array(
            'status' => 'success'
        ));
    } catch (PDOException $e) {
        nv_jsonOutput(array(
            'status' => 'error',
            'message' => $e->getMessage()
        ));
    }
}

// Xử lý AJAX request
if ($nv_Request->get_string('action', 'post', '') == 'get_posts') {
    // Kiểm tra session admin
    if (!defined('NV_IS_FILE_ADMIN')) {
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'error',
            'message' => 'Session expired'
        ]);
        exit();
    }

    // Kiểm tra token bảo mật
    $checkss = md5($id . NV_CHECK_SESSION);
    $checkss_input = $nv_Request->get_string('checkss', 'post', '');

    if ($checkss_input != $checkss) {
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid security token'
        ]);
        exit();
    }

    try {
        // Kiểm tra bảng posts có tồn tại không
        $table_name = NV_PREFIXLANG . '_posts';
        $sql = "SHOW TABLES LIKE '" . $table_name . "'";
        $result = $db->query($sql)->fetchColumn();

        if (!$result) {
            header('Content-Type: application/json');
            echo json_encode([
                'status' => 'error',
                'message' => 'Bảng posts chưa được tạo'
            ]);
            exit();
        }

        // Lấy danh sách selected_post_ids từ CV hiện tại
        $cv_info = $db->query('SELECT selected_post_ids FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = ' . $id)->fetch();
        $selected_post_ids = !empty($cv_info['selected_post_ids']) ? explode(',', $cv_info['selected_post_ids']) : array();

        // Xử lý phân trang
        $page = $nv_Request->get_int('page', 'post', 1);
        $per_page = 6; // Số bài viết mỗi trang

        // Lấy tổng số bài viết
        $total = $db->query('SELECT COUNT(*) FROM ' . $table_name . ' WHERE status = 1')->fetchColumn();
        $total_pages = ceil($total / $per_page);

        // Điều chỉnh số trang nếu vượt quá
        if ($page > $total_pages) {
            $page = $total_pages;
        }

        // Truy vấn bảng posts với phân trang
        $sql = 'SELECT id, title, description, image 
                FROM ' . $table_name . ' 
                WHERE status = 1 
                ORDER BY id DESC 
                LIMIT ' . $per_page . ' 
                OFFSET ' . ($page - 1) * $per_page;
        $posts = $db->query($sql)->fetchAll();
        $data = array();

        foreach ($posts as $post) {
            // Xử lý ảnh
            if (!empty($post['image'])) {
                $image_path = NV_UPLOADS_REAL_DIR . '/posts/' . $post['image'];
                if (file_exists($image_path)) {
                    $post['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/posts/' . $post['image'];
                } else {
                    $post['image'] = NV_BASE_SITEURL . 'themes/' . $global_config['site_theme'] . '/images/no-image.jpg';
                }
            } else {
                $post['image'] = NV_BASE_SITEURL . 'themes/' . $global_config['site_theme'] . '/images/no-image.jpg';
            }

            // Xử lý link và description
            $post['link'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=posts&' . NV_OP_VARIABLE . '=detail&id=' . $post['id'];
            $post['description'] = !empty($post['description']) ? nv_clean60($post['description'], 150) : '';

            // Kiểm tra xem bài viết có được chọn không
            $post['is_selected'] = in_array($post['id'], $selected_post_ids);
            
            $data[] = array(
                'id' => $post['id'],
                'title' => $post['title'],
                'description' => $post['description'],
                'image' => $post['image'],
                'link' => $post['link'],
                'is_selected' => $post['is_selected']
            );
        }

        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'message' => '',
            'data' => $data,
            'pagination' => array(
                'current_page' => $page,
                'total_pages' => $total_pages,
                'per_page' => $per_page
            )
        ]);
        exit();
    } catch (PDOException $e) {
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'error',
            'message' => $lang_module['error_database'] . ': ' . $e->getMessage()
        ]);
        exit();
    }
}

if ($nv_Request->get_string('action', 'post', '') == 'get_selected_posts') {
    if (!defined('NV_IS_FILE_ADMIN')) {
        nv_jsonOutput([
            'status' => 'error',
            'message' => 'Session expired'
        ]);
    }

    $cv_id = $nv_Request->get_int('cv_id', 'post', 0);
    $checkss = $nv_Request->get_string('checkss', 'post', '');

    if ($checkss != md5($cv_id . NV_CHECK_SESSION)) {
        nv_jsonOutput([
            'status' => 'error',
            'message' => 'Invalid security token'
        ]);
    }

    try {
        // Lấy danh sách post_id từ selected_post_ids
        $sql = 'SELECT selected_post_ids FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = ' . $cv_id;
        $selected_post_ids = $db->query($sql)->fetchColumn();
        
        if (!empty($selected_post_ids)) {
            // Lấy thông tin các bài viết đã chọn và status của CV với từng job
            $sql = 'SELECT p.id, p.title, COALESCE(cp.status, 0) as cv_status 
                    FROM ' . NV_PREFIXLANG . '_posts p 
                    LEFT JOIN ' . NV_PREFIXLANG . '_' . $module_data . '_posts cp 
                        ON cp.post_id = p.id AND cp.cv_id = ' . $cv_id . '
                    WHERE p.id IN (' . $selected_post_ids . ')';
            $result = $db->query($sql);
            $posts = [];
            
            while ($post = $result->fetch()) {
                $posts[] = [
                    'id' => $post['id'],
                    'title' => $post['title'],
                    'preview_url' => NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=posts&' . NV_OP_VARIABLE . '=detail&id=' . $post['id'],
                    'cv_status' => intval($post['cv_status'])
                ];
            }

            nv_jsonOutput([
                'status' => 'success',
                'data' => $posts
            ]);
        } else {
            nv_jsonOutput([
                'status' => 'success',
                'data' => []
            ]);
        }
    } catch (PDOException $e) {
        nv_jsonOutput([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
    }
}

// Thêm hàm format thời gian an toàn
function formatDateTime($datetime) {
    if (empty($datetime)) {
        return '';
    }
    return date('d/m/Y H:i', strtotime($datetime));
}

// Xử lý hiển thị trang chi tiết CV
if ($id > 0) {
    $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = :id';
    $sth = $db->prepare($sql);
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $row = $sth->fetch();

    if ($row) {
        $page_title = $lang_module['detail'] . ': ' . $row['title'];

        // Thêm checkss cho bảo mật
        $row['checkss'] = md5($row['id'] . NV_CHECK_SESSION);

        // Format lại thời gian
        $row['created_at'] = formatDateTime($row['created_at']);
        $row['updated_at'] = formatDateTime($row['updated_at']);

        // Đường dẫn file PDF
        $row['file_url'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['link'];

        $xtpl = new XTemplate('detail.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
        $xtpl->assign('LANG', $lang_module);
        $xtpl->assign('GLANG', $lang_global);
        $xtpl->assign('MODULE_NAME', $module_name);
        $xtpl->assign('OP', $op);
        $xtpl->assign('ROW', $row);
        $xtpl->assign('CHECKSS', md5($row['id'] . NV_CHECK_SESSION));
        $xtpl->assign('BACK', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');

        $xtpl->parse('main');
        $contents = $xtpl->text('main');

        include NV_ROOTDIR . '/includes/header.php';
        echo nv_admin_theme($contents);
        include NV_ROOTDIR . '/includes/footer.php';
    } else {
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');
    }
} else {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');
}
