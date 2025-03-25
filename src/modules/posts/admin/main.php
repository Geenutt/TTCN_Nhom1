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

$page_title = $nv_Lang->getModule('list');

// Xử lý tìm kiếm
$search = [];
$search['title'] = $nv_Request->get_title('search_title', 'get', '');
$search['status'] = $nv_Request->get_int('search_status', 'get', -1);

$where = '1=1';
if (!empty($search['title'])) {
    $where .= ' AND title LIKE :title';
}
if ($search['status'] !== -1) {
    $where .= ' AND status = ' . $search['status'];
}

// Thêm xử lý sắp xếp
$orderby = $nv_Request->get_string('sortby', 'get', 'id');
$ordertype = $nv_Request->get_string('sorttype', 'get', 'DESC');

// Xác định hướng sắp xếp tiếp theo
$ordertype_next = ($ordertype == 'DESC') ? 'ASC' : 'DESC';

// Query với điều kiện tìm kiếm và sắp xếp
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE ' . $where . ' ORDER BY ' . $orderby . ' ' . $ordertype;

$sth = $db->prepare($sql);
if (!empty($search['title'])) {
    $sth->bindValue(':title', '%' . $search['title'] . '%', PDO::PARAM_STR);
}
$sth->execute();
$_rows = $sth->fetchAll();
$num = count($_rows);

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);
$xtpl->assign('SEARCH', $search);
$xtpl->assign('FORM_ACTION', NV_BASE_ADMINURL . 'index.php');

if ($num) {
    // Hiện bảng dữ liệu
    foreach ($_rows as $row) {
        $row['checkss'] = md5($row['id'] . NV_CHECK_SESSION);
        $row['detail_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=detail&amp;id=' . $row['id'];
        $row['edit_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=edit&amp;id=' . $row['id'];
        $row['delete_url'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=delete&amp;id=' . $row['id'];
        
        // Format lại ngày giờ
        $row['created_at'] = date('d/m/Y H:i', strtotime($row['created_at']));
        $row['updated_at'] = date('d/m/Y H:i', strtotime($row['updated_at']));

        // Thêm text trạng thái
        $row['status_text'] = $nv_Lang->getModule('status_' . $row['status']);

        $xtpl->assign('ROW', $row);
        $xtpl->parse('main.loop');
    }
    $xtpl->parse('main');
    $contents = $xtpl->text('main');
} else {
    // Hiện thông báo chưa có dữ liệu
    $xtpl->parse('empty');
    $contents = $xtpl->text('empty');
}

// Gán biến cho template
$xtpl->assign('SORTBY', $orderby);
$xtpl->assign('SORTTYPE', $ordertype);
$xtpl->assign('SORTTYPE_NEXT', $ordertype_next);

// Parse sort icon
if ($orderby == 'id') {
    $xtpl->parse('main.id_sort');
}

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
