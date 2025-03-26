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

if ($id > 0) {
    // Lấy thông tin CV
    $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = :id';
    $sth = $db->prepare($sql);
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $row = $sth->fetch();

    if ($row) {
        $page_title = $nv_Lang->getModule('edit') . ': ' . $row['title'];

        if ($nv_Request->isset_request('submit', 'post')) {
            $title = $nv_Request->get_title('title', 'post', '');
            
            // Debug
            error_log('Form submitted');
            error_log('Title: ' . $title);
            error_log('File: ' . print_r($_FILES, true));
            error_log('POST data: ' . print_r($_POST, true));
            
            if (empty($title)) {
                $error = $nv_Lang->getModule('error_title');
            } else {
                try {
                    // Xử lý upload file mới nếu có
                    if (!empty($_FILES['file_cv']['name'])) {
                        $file = $_FILES['file_cv'];
                        $file_name = $file['name'];
                        $file_type = $file['type'];
                        $file_size = $file['size'];
                        $file_tmp = $file['tmp_name'];
                        $file_error = $file['error'];

                        // Debug
                        error_log('File info:');
                        error_log('Name: ' . $file_name);
                        error_log('Type: ' . $file_type);
                        error_log('Size: ' . $file_size);
                        error_log('Error: ' . $file_error);

                        // Kiểm tra loại file
                        if ($file_type != 'application/pdf') {
                            $error = $nv_Lang->getModule('error_file_type');
                        }
                        // Kiểm tra kích thước file
                        elseif ($file_size > 2 * 1024 * 1024) { // Giới hạn 2MB
                            $error = sprintf($nv_Lang->getModule('error_file_size'), 2);
                        }
                        // Kiểm tra lỗi upload
                        elseif ($file_error != 0) {
                            $error = $nv_Lang->getModule('error_file_upload');
                        } else {
                            // Xóa file cũ
                            if (!empty($row['link'])) {
                                $old_file = NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['link'];
                                if (file_exists($old_file)) {
                                    nv_deletefile($old_file);
                                }
                            }

                            // Tạo tên file mới
                            $new_name = nv_string_to_filename($title) . '_' . nv_genpass(10) . '.pdf';
                            $upload_path = NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $new_name;

                            // Debug
                            error_log('Upload path: ' . $upload_path);

                            // Upload file mới
                            if (move_uploaded_file($file_tmp, $upload_path)) {
                                $sth = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . ' SET title = :title, link = :link WHERE id = :id');
                                $sth->bindValue(':title', $title, PDO::PARAM_STR);
                                $sth->bindValue(':link', $new_name, PDO::PARAM_STR);
                                $sth->bindValue(':id', $id, PDO::PARAM_INT);
                                $sth->execute();

                                nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');
                            } else {
                                $error = $nv_Lang->getModule('error_file_upload');
                            }
                        }
                    } else {
                        // Chỉ cập nhật tiêu đề
                        $sth = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . ' SET title = :title WHERE id = :id');
                        $sth->bindValue(':title', $title, PDO::PARAM_STR);
                        $sth->bindValue(':id', $id, PDO::PARAM_INT);
                        $sth->execute();

                        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');
                    }
                } catch (PDOException $e) {
                    $error = $nv_Lang->getModule('error_save');
                    error_log('Database error: ' . $e->getMessage());
                }
            }
        }

        $xtpl = new XTemplate('edit.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
        $xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
        $xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
        $xtpl->assign('MODULE_NAME', $module_name);
        $xtpl->assign('OP', 'edit');
        $xtpl->assign('ROW', $row);
        $xtpl->assign('MODULE_UPLOAD', $module_upload);
        $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
        $xtpl->assign('NV_UPLOADS_DIR', NV_UPLOADS_DIR);
        $xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
        $xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
        $xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
        $xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
        $xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
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
    } else {
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');
    }
} else {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main');
}
