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

$page_title = $nv_Lang->getModule('create');

if ($nv_Request->isset_request('submit', 'post')) {
    $title = $nv_Request->get_title('title', 'post', '');
    
    if (empty($title)) {
        $error = $nv_Lang->getModule('error_title');
    } elseif (empty($_FILES['file_cv'])) {
        $error = $nv_Lang->getModule('error_file');
    } else {
        $file = $_FILES['file_cv'];
        $file_name = $file['name'];
        $file_type = $file['type'];
        $file_size = $file['size'];
        $file_tmp = $file['tmp_name'];
        $file_error = $file['error'];

        // Kiểm tra loại file
        if ($file_type != 'application/pdf') {
            $error = $nv_Lang->getModule('error_file_type');
        }
        // Kiểm tra kích thước file
        elseif ($file_size > 10 * 1024 * 1024) { // Giới hạn 10MB
            $error = sprintf($nv_Lang->getModule('error_file_size'), 10);
        }
        // Kiểm tra lỗi upload
        elseif ($file_error != 0) {
            $error = $nv_Lang->getModule('error_file_upload');
        } else {
            // Tạo tên file mới
            $new_name = nv_string_to_filename($title) . '_' . nv_genpass(10) . '.pdf';
            $upload_path = NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $new_name;

            // Upload file
            if (move_uploaded_file($file_tmp, $upload_path)) {
                try {
                    $sth = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . ' (title, link) VALUES (:title, :link)');
                    $sth->bindValue(':title', $title, PDO::PARAM_STR);
                    $sth->bindValue(':link', $new_name, PDO::PARAM_STR);
                    $sth->execute();

                    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');
                } catch (PDOException $e) {
                    $error = $nv_Lang->getModule('error_save');
                }
            } else {
                $error = $nv_Lang->getModule('error_file_upload');
            }
        }
    }
}

$xtpl = new XTemplate('create.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $row);
$xtpl->assign('BACK', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');

if (!empty($error)) {
    $xtpl->assign('ERROR', $error);
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
