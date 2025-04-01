<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_MOD_POSTS')) {
    exit('Stop!!!');
}

$page_title = $module_info['site_title'];
$key_words = $module_info['keywords'];

// Lấy dữ liệu từ CSDL
$array_data = array();
$sql = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . " WHERE status=1 ORDER BY created_at DESC";
$result = $db->query($sql);
while ($row = $result->fetch()) {
    $array_data[] = $row;
}

$contents = nv_theme_posts_main($array_data);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
