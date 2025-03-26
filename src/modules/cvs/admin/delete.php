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

$id = $nv_Request->get_int('id', 'post', 0);

if ($id > 0) {
    // Lấy thông tin CV
    $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = :id';
    $sth = $db->prepare($sql);
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $row = $sth->fetch();

    if ($row) {
        // Xóa file CV
        if (!empty($row['link'])) {
            $file = NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['link'];
            if (file_exists($file)) {
                nv_deletefile($file);
            }
        }

        // Xóa dữ liệu
        $sth = $db->prepare('DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = :id');
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();

        nv_jsonOutput([
            'status' => 'OK',
            'message' => $nv_Lang->getModule('delete_success')
        ]);
    }
}

nv_jsonOutput([
    'status' => 'error',
    'message' => $nv_Lang->getModule('error_delete')
]);
