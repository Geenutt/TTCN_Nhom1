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
$params = array();

if (!empty($search['title'])) {
    $where .= ' AND title LIKE :title';
    $params[':title'] = '%' . $search['title'] . '%';
}
if ($search['status'] !== -1) {
    $where .= ' AND status = :status';
    $params[':status'] = $search['status'];
}

// Thêm xử lý sắp xếp
$orderby = $nv_Request->get_string('sortby', 'get', 'id');
$ordertype = $nv_Request->get_string('sorttype', 'get', 'DESC');

// Xác định hướng sắp xếp tiếp theo
$ordertype_next = ($ordertype == 'DESC') ? 'ASC' : 'DESC';

// Xử lý phân trang
$page = $nv_Request->get_int('page', 'get', 1);
$per_page = 10; // Số bài viết mỗi trang

// Lấy tổng số bài viết
$db->sqlreset()
    ->select('COUNT(*)')
    ->from(NV_PREFIXLANG . '_' . $module_data)
    ->where($where);
$sth = $db->prepare($db->sql());
$sth->execute($params);
$total = $sth->fetchColumn();

// Tính tổng số trang
$total_pages = ceil($total / $per_page);

// Điều chỉnh số trang nếu vượt quá
if ($page > $total_pages) {
    $page = $total_pages;
}
if ($page < 1) {
    $page = 1;
}

// Lấy danh sách bài viết theo trang
$db->sqlreset()
    ->select('*')
    ->from(NV_PREFIXLANG . '_' . $module_data)
    ->where($where)
    ->order($orderby . ' ' . $ordertype)
    ->limit($per_page)
    ->offset(($page - 1) * $per_page);
$sth = $db->prepare($db->sql());
$sth->execute($params);
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
    
    // Tạo phân trang
    if ($total_pages > 1) {
        $base_url = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;
        if (!empty($search['title'])) {
            $base_url .= '&amp;search_title=' . $search['title'];
        }
        if ($search['status'] !== -1) {
            $base_url .= '&amp;search_status=' . $search['status'];
        }
        if ($orderby != 'id') {
            $base_url .= '&amp;sortby=' . $orderby;
        }
        if ($ordertype != 'DESC') {
            $base_url .= '&amp;sorttype=' . $ordertype;
        }
        
        // Nút Previous
        if ($page > 1) {
            $prev_page = $page - 1;
            $xtpl->assign('PREV_PAGE_URL', $base_url . '&amp;page=' . $prev_page);
            $xtpl->parse('main.generate_page.prev_page');
        } else {
            $xtpl->parse('main.generate_page.prev_page_disabled');
        }
        
        // Các số trang
        for ($i = 1; $i <= $total_pages; $i++) {
            $xtpl->assign('PAGE_URL', $base_url . '&amp;page=' . $i);
            $xtpl->assign('PAGE_NUMBER', $i);
            $xtpl->assign('ACTIVE', $i == $page ? 'active' : '');
            $xtpl->parse('main.generate_page.page_number');
        }
        
        // Nút Next
        if ($page < $total_pages) {
            $next_page = $page + 1;
            $xtpl->assign('NEXT_PAGE_URL', $base_url . '&amp;page=' . $next_page);
            $xtpl->parse('main.generate_page.next_page');
        } else {
            $xtpl->parse('main.generate_page.next_page_disabled');
        }
        
        $xtpl->parse('main.generate_page');
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
