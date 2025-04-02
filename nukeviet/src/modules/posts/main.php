<?php
if (!defined('NV_IS_FILE_MODULES')) {
    die('Stop!!!');
}

$page_title = $module_info['site_title'];
$key_words = $module_info['keywords'];

// Lấy số trang
$page = $nv_Request->get_int('page', 'post,get');
$per_page = 5; // Số bài viết mỗi trang

// Lấy tổng số bài viết
$db->sqlreset()
    ->select('COUNT(*)')
    ->from(NV_PREFIXLANG . '_' . $module_data);
$total = $db->query($db->sql())->fetchColumn();

// Tính tổng số trang
$total_pages = ceil($total / $per_page);

// Lấy danh sách bài viết theo trang
$db->sqlreset()
    ->select('*')
    ->from(NV_PREFIXLANG . '_' . $module_data)
    ->order('created_at DESC')
    ->limit($per_page)
    ->offset(($page - 1) * $per_page);
$result = $db->query($db->sql());

$array = array();
while ($row = $result->fetch()) {
    $row['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=detail&amp;id=' . $row['id'];
    $row['image'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['image'];
    $array[] = $row;
}

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('LANG', $lang_module);

foreach ($array as $row) {
    $xtpl->assign('ROW', $row);
    $xtpl->parse('main.loop');
}

// Tạo phân trang
if ($total_pages > 1) {
    $base_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;
    
    // Nút Previous
    if ($page > 1) {
        $prev_page = $page - 1;
        $xtpl->assign('PREV_PAGE_URL', $base_url . '&amp;page=' . $prev_page);
        $xtpl->parse('main.generate_page.prev_page');
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
    }
    
    $xtpl->parse('main.generate_page');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php'; 