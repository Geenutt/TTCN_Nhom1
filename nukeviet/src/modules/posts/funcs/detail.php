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

$id = $nv_Request->get_int('id', 'get', 0);

// Lấy thông tin bài viết
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = ' . $id . ' AND status = 1';
$row = $db->query($sql)->fetch();

if (empty($row)) {
    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

// Xử lý ảnh
if (!empty($row['image']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['image'])) {
    $row['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['image'];
} else {
    $row['image'] = NV_BASE_SITEURL . 'themes/' . $global_config['site_theme'] . '/images/no-image.jpg';
}

// Tạo link
$row['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=detail&id=' . $row['id'];

// Lấy các bài viết liên quan
$sql = 'SELECT id, title, description, image 
        FROM ' . NV_PREFIXLANG . '_' . $module_data . ' 
        WHERE id != ' . $id . ' 
        AND status = 1 
        ORDER BY RAND() 
        LIMIT 5';
$related_posts = $db->query($sql)->fetchAll();

// Xử lý ảnh cho các bài viết liên quan
foreach ($related_posts as &$post) {
    if (!empty($post['image']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $post['image'])) {
        $post['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $post['image'];
    } else {
        $post['image'] = NV_BASE_SITEURL . 'themes/' . $global_config['site_theme'] . '/images/no-image.jpg';
    }
    $post['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=detail&id=' . $post['id'];
}

$page_title = $row['title'];
$key_words = $row['title'];

$contents = nv_theme_posts_detail($row, $related_posts);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
