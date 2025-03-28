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

$where = '1=1';
if (!empty($search['title'])) {
    $where .= ' AND title LIKE :title';
}

// Xử lý sắp xếp
$base_url = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name;
$sortby = $nv_Request->get_string('sortby', 'get', 'id');
$sorttype = $nv_Request->get_string('sorttype', 'get', 'DESC');
$sorttype = ($sorttype == 'DESC') ? 'DESC' : 'ASC';

// Query với điều kiện tìm kiếm và sắp xếp
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE ' . $where . ' ORDER BY ' . $sortby . ' ' . $sorttype;

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
$xtpl->assign('BASE_URL', $base_url);
$xtpl->assign('ADD_NEW_CV', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=create');

// Gán biến sắp xếp
$xtpl->assign('SORTTYPE', ($sorttype == 'DESC') ? 'ASC' : 'DESC');
$xtpl->assign('WEIGHT', array(
    'sorttype' => strtolower($sorttype)
));

// Parse sort_weight block nếu đang sắp xếp theo ID
if ($sortby == 'id') {
    $xtpl->parse('main.sort_weight');
}

// Format thời gian an toàn hơn
function formatDateTime($datetime) {
    if (empty($datetime)) {
        return '';
    }
    return date('d/m/Y H:i', strtotime($datetime));
}

if (!empty($_rows)) {
    foreach ($_rows as $row) {
        $row['link_edit'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=edit&amp;id=' . $row['id'];
        $row['link_view'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=detail&amp;id=' . $row['id'];
        $row['created_at'] = formatDateTime($row['created_at']);
        $row['updated_at'] = formatDateTime($row['updated_at']);
        $xtpl->assign('ROW', $row);
        $xtpl->parse('main.loop');
    }
} else {
    $xtpl->parse('main.empty');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
