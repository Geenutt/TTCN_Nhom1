<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 12/31/2009 0:51
 */

if (!defined('NV_IS_MOD_POSTS')) {
    die('Stop!!!');
}

/**
 * nv_theme_posts_main()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_posts_main($array_data)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);
    
    foreach ($array_data as $row) {
        $row['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_info['module_theme'] . '&' . NV_OP_VARIABLE . '=detail&id=' . $row['id'];
        
        if (!empty($row['image']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_info['module_upload'] . '/' . $row['image'])) {
            $row['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_info['module_upload'] . '/' . $row['image'];
        } else {
            $row['image'] = NV_BASE_SITEURL . 'themes/' . $module_info['template'] . '/images/no-image.jpg';
        }
        
        $xtpl->assign('ROW', $row);
        $xtpl->parse('main.loop');
    }
    
    $xtpl->parse('main');
    return $xtpl->text('main');
}

/**
 * nv_theme_posts_detail()
 * 
 * @param mixed $row
 * @param mixed $related_posts
 * @return
 */
function nv_theme_posts_detail($row, $related_posts)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate('detail.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);
    $xtpl->assign('ROW', $row);
    
    if (!empty($related_posts)) {
        foreach ($related_posts as $post) {
            $xtpl->assign('POST', $post);
            $xtpl->parse('main.related_posts.loop');
        }
        $xtpl->parse('main.related_posts');
    }
    
    $xtpl->parse('main');
    return $xtpl->text('main');
}
