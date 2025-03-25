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

$id = $nv_Request->get_int('id', 'post,get', 0);
$checkss = $nv_Request->get_string('checkss', 'post,get', '');

if ($id > 0) {
    // Kiểm tra checkss để tránh CSRF
    if ($checkss == md5($id . NV_CHECK_SESSION)) {
        // Lấy thông tin bài viết
        $sql = 'SELECT title, image FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id=' . $id;
        $row = $db->query($sql)->fetch();
        
        if (!empty($row)) {
            // Xóa ảnh nếu có
            if (!empty($row['image']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['image'])) {
                @unlink(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['image']);
            }

            // Xóa bài viết khỏi CSDL
            $sql = 'DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = ' . $id;
            if ($db->exec($sql)) {
                // Ghi log
                nv_insert_logs(NV_LANG_DATA, $module_name, 'Delete', 'ID: ' . $id . ' Title: ' . $row['title'], $admin_info['userid']);

                // Clear cache
                $nv_Cache->delMod($module_name);

                // Thông báo thành công
                nv_jsonOutput([
                    'status' => 'ok',
                    'message' => $nv_Lang->getModule('delete_success'),
                    'redirect' => NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name
                ]);
            }
        }
    }
}

// Nếu có lỗi thì thông báo
nv_jsonOutput([
    'status' => 'error',
    'message' => $nv_Lang->getModule('delete_error')
]);
