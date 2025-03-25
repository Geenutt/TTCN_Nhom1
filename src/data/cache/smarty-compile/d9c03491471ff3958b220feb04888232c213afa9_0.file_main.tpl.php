<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:08:10
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcafab69648_95182357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9c03491471ff3958b220feb04888232c213afa9' => 
    array (
      0 => 'main.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67cdcafab69648_95182357 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\system';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<header class="header-outer border-bottom">
    <div class="header-inner d-flex">
        <div class="site-brand text-center ms-2 ms-md-0">
            <a class="logo" href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
">
                <img src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['admin_theme'];?>
/images/logo.png" alt="<?php echo $_smarty_tpl->getValue('GCONFIG')['site_name'];?>
">
            </a>
            <a class="logo-sm" href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
">
                <img src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['admin_theme'];?>
/images/logo-sm.png" alt="<?php echo $_smarty_tpl->getValue('GCONFIG')['site_name'];?>
">
            </a>
        </div>
        <div class="site-header flex-grow-1 flex-shrink-1 d-flex align-items-center justify-content-between px-2 px-sm-4">
            <div class="header-left">
                <a href="#" class="left-sidebar-toggle fs-4" data-toggle="left-sidebar" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_left_sidebar');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('toggle_left_sidebar');?>
"><i class="fas fa-bars ico-vc"></i></a>
            </div>
            <div class="header-right d-flex position-relative ms-auto">
                <nav class="main-icons">
                    <ul class="d-flex list-unstyled my-0 ms-0 me-3">
                        <li>
                            <a title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('go_clientsector');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('go_clientsector');?>
" href="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php if (( !$_smarty_tpl->hasVariable('SITE_MODS') || empty($_smarty_tpl->getValue('SITE_MODS')))) {
echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);
} else {
echo $_smarty_tpl->getValue('GCONFIG')['site_lang'];
}?>" class="fs-3"><i class="fas fa-home ico-vc"></i></a>
                        </li>
                        <?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['notification_active'])) && !($_smarty_tpl->getValue('MODULE_NAME') == 'siteinfo' && $_smarty_tpl->getValue('OP') == 'notification')) {?>
                        <li class="dropdown-center site-noti" id="main-notifications" data-enable="true">
                            <a title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('site_info');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('site_info');?>
" href="#" class="fs-3" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" data-bs-offset="0,11"><i class="fas fa-bell ico-vc"></i><span class="indicator"></span></a>
                            <div class="dropdown-menu dropdown-menu-end pb-0">
                                <div class="noti-heading text-center border-bottom pb-2 fw-medium">
                                    <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('inform_unread');?>
 <span class="badge rounded-pill text-bg-info" data-count="0">..</span>
                                </div>
                                <div class="noti-body site-notis position-relative">
                                    <div class="position-relative noti-lists">
                                        <div class="noti-lists-inner">
                                        </div>
                                    </div>
                                    <div class="loader position-absolute bottom-0 start-50 translate-middle-x d-none"><i class="fa-solid fa-spinner fa-spin-pulse"></i></div>
                                </div>
                                <div class="noti-footer border-top d-flex flex-nowrap">
                                    <a class="w-50 fw-medium border-end text-center text-truncate p-2" href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=siteinfo&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=notification"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('view_all');?>
</a>
                                    <a class="w-50 fw-medium text-center text-truncate p-2 markall" href="#"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('mark_read_all');?>
</a>
                                </div>
                            </div>
                        </li>
                        <?php }?>
                        <li class="menu-sys" id="menu-sys">
                            <a title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('sys_mods');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('sys_mods');?>
" href="#" class="fs-3" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" data-bs-display="static"><i class="fas fa-th ico-vc"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="menu-sys-inner position-relative">
                                    <div class="menu-sys-items">
                                        <div class="row">
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ADMIN_MODS'), 'mvalue', false, 'mname');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('mname')->value => $_smarty_tpl->getVariable('mvalue')->value) {
$foreach11DoElse = false;
?>
                                            <?php if (!( !true || empty($_smarty_tpl->getValue('mvalue')['custom_title']))) {?>
                                            <?php $_smarty_tpl->assign('submenu', $_smarty_tpl->getSmarty()->getModifierCallback('submenu')($_smarty_tpl->getValue('mname')), true, NULL);?>
                                            <div class="col-md-3 col-sm-6">
                                                <ul class="list-unstyled mb-4">
                                                    <li class="fs-4 fw-medium mb-2 border-bottom pb-1"><a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('mname');?>
"><?php echo $_smarty_tpl->getValue('mvalue')['custom_title'];?>
</a></li>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('submenu'), 'mopname', false, 'mop');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('mop')->value => $_smarty_tpl->getVariable('mopname')->value) {
$foreach12DoElse = false;
?>
                                                    <li class="mb-1"><a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('mname');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('mop');?>
"><?php echo $_smarty_tpl->getValue('mopname');?>
</a></li>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </ul>
                                            </div>
                                            <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('theme_settings');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('theme_settings');?>
" href="#" class="fs-3" data-toggle="right-sidebar"><i class="fas fa-cog ico-vc"></i></a title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('sys_mods');?>
">
                        </li>
                    </ul>
                </nav>
                <div class="admin-info">
                    <a title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('admin_account');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('admin_account');?>
" href="#" class="admin-icon" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" data-bs-display="static">
                        <span>
                            <?php if (!( !true || empty($_smarty_tpl->getValue('ADMIN_INFO')['avata']))) {?>
                            <img alt="<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['full_name'];?>
" src="<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['avata'];?>
">
                            <?php } elseif (!( !true || empty($_smarty_tpl->getValue('ADMIN_INFO')['photo']))) {?>
                            <img alt="<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['full_name'];?>
" src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);
echo $_smarty_tpl->getValue('ADMIN_INFO')['photo'];?>
">
                            <?php } else { ?>
                            <i class="fa-solid fa-circle-user ico-vc"></i>
                            <?php }?>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <li class="px-2">
                            <div class="fw-medium fs-3 mb-2"><?php echo $_smarty_tpl->getValue('ADMIN_INFO')['full_name'];?>
</div>
                            <img alt="<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['username'];?>
" src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['admin_theme'];?>
/images/admin<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['level'];?>
.png"> <?php echo $_smarty_tpl->getValue('ADMIN_INFO')['username'];?>

                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="px-2">
                            <i class="fa fa-caret-right fa-fw"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('hello_admin2',$_smarty_tpl->getSmarty()->getModifierCallback('date')('H:i d/m/Y',$_smarty_tpl->getValue('ADMIN_INFO')['current_login']),$_smarty_tpl->getValue('ADMIN_INFO')['current_ip']);?>

                        </li>
                        <?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['admin_login_duration']))) {?>
                        <li><hr class="dropdown-divider"></li>
                        <li class="px-2">
                            <i class="fa fa-globe fa-spin fa-fw"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('login_session_expire');?>
 <span id="countdown" data-duration="<?php echo ($_smarty_tpl->getValue('ADMIN_INFO')['current_login']+$_smarty_tpl->getValue('GCONFIG')['admin_login_duration']-(defined('NV_CURRENTTIME') ? constant('NV_CURRENTTIME') : null))*1000;?>
"></span>
                        </li>
                        <?php }?>
                        <?php if (!( !true || empty($_smarty_tpl->getValue('ADMIN_INFO')['last_login']))) {?>
                        <li><hr class="dropdown-divider"></li>
                        <li class="px-2">
                            <i class="fa fa-caret-right fa-fw"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('hello_admin1',$_smarty_tpl->getSmarty()->getModifierCallback('date')('H:i d/m/Y',$_smarty_tpl->getValue('ADMIN_INFO')['last_login']),$_smarty_tpl->getValue('ADMIN_INFO')['last_ip']);?>

                        </li>
                        <?php }?>
                        <li><hr class="dropdown-divider"></li>
                        <li class="px-2">
                            <a href="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=users">
                                <i class="fa fa-arrow-circle-right fa-fw"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('account_settings');?>

                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="px-2">
                            <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=authors&amp;id=<?php echo $_smarty_tpl->getValue('ADMIN_INFO')['admin_id'];?>
">
                                <i class="fa fa-arrow-circle-right fa-fw"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('your_admin_account');?>

                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="px-2">
                            <a href="#" data-toggle="admin-logout">
                                <i class="fa fa-power-off text-danger"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('admin_logout_title');?>

                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="left-sidebar border-end" id="left-sidebar">
    <div class="left-sidebar-wrapper">
        <div class="left-sidebar-in-sm border-bottom">
            <div class="d-flex mx-2 mx-sm-4 align-items-center fs-3">
                <div class="me-auto text-truncate fw-medium">
                    <?php echo $_smarty_tpl->getValue('PAGE_TITLE');?>

                </div>
                <div class="ms-3">
                    <a href="#" data-toggle="left-sidebar-sm"><i class="fa-solid fa-bars"></i></a>
                </div>
                <?php if (!( !$_smarty_tpl->hasVariable('BREADCRUMBS') || empty($_smarty_tpl->getValue('BREADCRUMBS'))) || (true && (true && null !== ($_smarty_tpl->getValue('HELP_URLS')[$_smarty_tpl->getValue('OP')] ?? null))) || ((true && (true && null !== ($_smarty_tpl->getValue('SITE_MODS')[$_smarty_tpl->getValue('MODULE_NAME')] ?? null))) && !( !true || empty($_smarty_tpl->getValue('SITE_MODS')[$_smarty_tpl->getValue('MODULE_NAME')]['main_file'])))) {?>
                <div class="ms-3">
                    <a href="#" data-toggle="breadcrumb"><i class="fa-solid fa-square-caret-down"></i></a>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <?php if (!( !$_smarty_tpl->hasVariable('SELECT_OPTIONS') || empty($_smarty_tpl->getValue('SELECT_OPTIONS')))) {?>
                        <li class="parent open">
                            <a href="#"><i class="fas fa-hand-pointer icon" title="<?php echo $_smarty_tpl->getValue('LANG')->get('please_select');?>
" data-bs-trigger="hover" data-bs-placement="right"></i><span><?php echo $_smarty_tpl->getValue('LANG')->get('please_select');?>
</span><span class="toggle"><i class="fas"></i></span></a>
                            <ul class="sub-menu">
                                <li class="title"><?php echo $_smarty_tpl->getValue('LANG')->get('please_select');?>
</li>
                                <li class="nav-items">
                                    <div class="nv-left-sidebar-scroller">
                                        <div class="content">
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SELECT_OPTIONS'), 'selopttitle', false, 'seloptlink');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('seloptlink')->value => $_smarty_tpl->getVariable('selopttitle')->value) {
$foreach13DoElse = false;
?>
                                                <li><a href="<?php echo $_smarty_tpl->getValue('seloptlink');?>
" title="<?php echo $_smarty_tpl->getValue('selopttitle');?>
"><span><?php echo $_smarty_tpl->getValue('selopttitle');?>
</span></a></li>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <li>
                        <?php }?>
                        <?php if (!( !$_smarty_tpl->hasVariable('MOD_CURRENT') || empty($_smarty_tpl->getValue('MOD_CURRENT')))) {?>
                        <li class="divider"><?php echo $_smarty_tpl->getValue('LANG')->get('interface_current_menu');?>
</li>
                        <li class="<?php if (!( !true || empty($_smarty_tpl->getValue('MOD_CURRENT')['subs']))) {?>parent <?php }?>active<?php if (( !true || empty($_smarty_tpl->getValue('CONFIG_THEME')['collapsed_leftsidebar']))) {?> open<?php }?>">
                            <a href="<?php echo $_smarty_tpl->getValue('MOD_CURRENT')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('MOD_CURRENT')['title'];?>
"><i class="<?php echo $_smarty_tpl->getValue('MOD_CURRENT')['icon'];?>
 icon" title="<?php echo $_smarty_tpl->getValue('MOD_CURRENT')['title'];?>
" data-bs-trigger="hover" data-bs-placement="right"></i><span><?php echo $_smarty_tpl->getValue('MOD_CURRENT')['title'];?>
</span><?php if (!( !true || empty($_smarty_tpl->getValue('MOD_CURRENT')['subs']))) {?><span class="toggle"><i class="fas"></i></span><?php }?></a>
                            <?php if (!( !true || empty($_smarty_tpl->getValue('MOD_CURRENT')['subs']))) {?>
                            <ul class="sub-menu">
                                <li class="title"><?php echo $_smarty_tpl->getValue('MOD_CURRENT')['title'];?>
</li>
                                <li class="nav-items">
                                    <div class="nv-left-sidebar-scroller">
                                        <div class="content">
                                            <ul>
                                                <li class="f-link<?php if ($_smarty_tpl->getValue('MOD_CURRENT')['active']) {?> active<?php }?>" title="<?php echo $_smarty_tpl->getValue('LANG')->get('Home');?>
"><a href="<?php echo $_smarty_tpl->getValue('MOD_CURRENT')['link'];?>
"><?php echo $_smarty_tpl->getValue('LANG')->get('Home');?>
</a></li>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MOD_CURRENT')['subs'], 'crrsub');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('crrsub')->value) {
$foreach14DoElse = false;
?>
                                                <?php if (!( !true || empty($_smarty_tpl->getValue('crrsub')['subs']))) {?>
                                                <li class="parent<?php if ($_smarty_tpl->getValue('crrsub')['active']) {?> active<?php }
if ($_smarty_tpl->getValue('crrsub')['open']) {?> open<?php }?>">
                                                    <a href="<?php echo $_smarty_tpl->getValue('crrsub')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('crrsub')['title'];?>
"><span><?php echo $_smarty_tpl->getValue('crrsub')['title'];?>
</span><span class="toggle"><i class="fas"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('crrsub')['subs'], 'crrsublv2');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('crrsublv2')->value) {
$foreach15DoElse = false;
?>
                                                        <li<?php if ($_smarty_tpl->getValue('crrsublv2')['active']) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getValue('crrsublv2')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('crrsublv2')['title'];?>
"><span><?php echo $_smarty_tpl->getValue('crrsublv2')['title'];?>
</span></a></li>
                                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                    </ul>
                                                </li>
                                                <?php } else { ?>
                                                <li<?php if ($_smarty_tpl->getValue('crrsub')['active']) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getValue('crrsub')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('crrsub')['title'];?>
"><span><?php echo $_smarty_tpl->getValue('crrsub')['title'];?>
</span></a></li>
                                                <?php }?>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <?php }?>
                        </li>
                        <?php }?>
                        <?php if (!( !$_smarty_tpl->hasVariable('MOD_MENU') || empty($_smarty_tpl->getValue('MOD_MENU')))) {?>
                        <li class="divider"><?php echo $_smarty_tpl->getValue('LANG')->get('interface_other_menu');?>
</li>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MOD_MENU'), 'rowmenu');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('rowmenu')->value) {
$foreach16DoElse = false;
?>
                        <li<?php if (!( !true || empty($_smarty_tpl->getValue('rowmenu')['subs']))) {?> class="parent"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->getValue('rowmenu')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('rowmenu')['title'];?>
"><i class="<?php echo $_smarty_tpl->getValue('rowmenu')['icon'];?>
 icon" title="<?php echo $_smarty_tpl->getValue('rowmenu')['title'];?>
" data-bs-trigger="hover" data-bs-placement="right"></i><span><?php echo $_smarty_tpl->getValue('rowmenu')['title'];?>
</span><?php if (!( !true || empty($_smarty_tpl->getValue('rowmenu')['subs']))) {?><span class="toggle"><i class="fas"></i></span><?php }?></a>
                            <?php if (!( !true || empty($_smarty_tpl->getValue('rowmenu')['subs']))) {?>
                            <ul class="sub-menu">
                                <li class="title"><?php echo $_smarty_tpl->getValue('rowmenu')['title'];?>
</li>
                                <li class="nav-items">
                                    <div class="nv-left-sidebar-scroller">
                                        <div class="content">
                                            <ul>
                                                <li class="f-link"><a href="<?php echo $_smarty_tpl->getValue('rowmenu')['link'];?>
"><?php echo $_smarty_tpl->getValue('LANG')->get('Home');?>
</a></li>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rowmenu')['subs'], 'smenutitle', false, 'smenukey');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('smenukey')->value => $_smarty_tpl->getVariable('smenutitle')->value) {
$foreach17DoElse = false;
?>
                                                <?php if (is_array($_smarty_tpl->getValue('smenutitle'))) {?>
                                                <li class="parent">
                                                    <a href="<?php echo $_smarty_tpl->getValue('NV_BASE_ADMINURL');?>
index.php?<?php echo $_smarty_tpl->getValue('NV_LANG_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('NV_LANG_DATA');?>
&amp;<?php echo $_smarty_tpl->getValue('NV_NAME_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('rowmenu')['name'];?>
&amp;<?php echo $_smarty_tpl->getValue('NV_OP_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('smenukey');?>
" title="<?php echo $_smarty_tpl->getValue('smenutitle')['title'];?>
"><span><?php echo $_smarty_tpl->getValue('smenutitle')['title'];?>
</span><span class="toggle"><i class="fas"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('smenutitle')['submenu'], 'sublv2', false, 'keysublv2');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('keysublv2')->value => $_smarty_tpl->getVariable('sublv2')->value) {
$foreach18DoElse = false;
?>
                                                        <li><a href="<?php echo $_smarty_tpl->getValue('NV_BASE_ADMINURL');?>
index.php?<?php echo $_smarty_tpl->getValue('NV_LANG_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('NV_LANG_DATA');?>
&amp;<?php echo $_smarty_tpl->getValue('NV_NAME_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('rowmenu')['name'];?>
&amp;<?php echo $_smarty_tpl->getValue('NV_OP_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('keysublv2');?>
" title="<?php echo $_smarty_tpl->getValue('sublv2');?>
"><span><?php echo $_smarty_tpl->getValue('sublv2');?>
</span></a></li>
                                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                    </ul>
                                                </li>
                                                <?php } else { ?>
                                                <li><a href="<?php echo $_smarty_tpl->getValue('NV_BASE_ADMINURL');?>
index.php?<?php echo $_smarty_tpl->getValue('NV_LANG_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('NV_LANG_DATA');?>
&amp;<?php echo $_smarty_tpl->getValue('NV_NAME_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('rowmenu')['name'];?>
&amp;<?php echo $_smarty_tpl->getValue('NV_OP_VARIABLE');?>
=<?php echo $_smarty_tpl->getValue('smenukey');?>
" title="<?php echo $_smarty_tpl->getValue('smenutitle');?>
"><?php echo $_smarty_tpl->getValue('smenutitle');?>
</a></li>
                                                <?php }?>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <?php }?>
                        </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="body">
    <section class="main-content">
        <div class="breadcrumb-wrap px-4 d-flex align-items-center justify-content-between">
            <?php if (( !$_smarty_tpl->hasVariable('BREADCRUMBS') || empty($_smarty_tpl->getValue('BREADCRUMBS')))) {?>
            <h1 class="h3 page-title mb-0 text-truncate" title="<?php echo $_smarty_tpl->getValue('PAGE_TITLE');?>
"><?php echo $_smarty_tpl->getValue('PAGE_TITLE');?>
</h1>
            <?php } else { ?>
            <nav aria-label="breadcrumb" class="site-breadcrumb pe-1" id="breadcrumb">
                <ol class="breadcrumb flex-nowrap mb-0">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('BREADCRUMBS'), 'brcrb');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('brcrb')->value) {
$foreach19DoElse = false;
?>
                    <li class="breadcrumb-item fw-medium<?php if (!( !true || empty($_smarty_tpl->getValue('brcrb')['active']))) {?>" aria-current="page"<?php } else { ?>"<?php }?>>
                        <?php if (!( !true || empty($_smarty_tpl->getValue('brcrb')['link']))) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('brcrb')['link'];?>
"><?php echo $_smarty_tpl->getValue('brcrb')['title'];?>
</a>
                        <?php } else { ?>
                        <?php echo $_smarty_tpl->getValue('brcrb')['title'];?>

                        <?php }?>
                    </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <li class="breadcrumb-dropdown d-none ps-2">
                        <a href="#" data-toggle="popover" data-bs-content="&nbsp;" data-bs-custom-class="breadcrumb-popover" data-bs-html="true"><i class="fa-solid fa-circle-chevron-down"></i></a>
                    </li>
                </ol>
            </nav>
            <?php }?>
            <div class="go-clients d-flex align-items-center" id="go-clients">
                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('HELP_URLS')[$_smarty_tpl->getValue('OP')] ?? null)))) {?>
                <div class="ms-3">
                    <a href="<?php echo $_smarty_tpl->getValue('HELP_URLS')[$_smarty_tpl->getValue('OP')];?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('go_instrucion');?>
" target="_blank" data-bs-toggle="tooltip"><i class="fa-solid fa-book fa-lg"></i></a>
                </div>
                <?php }?>
                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('SITE_MODS')[$_smarty_tpl->getValue('MODULE_NAME')] ?? null))) && !( !true || empty($_smarty_tpl->getValue('SITE_MODS')[$_smarty_tpl->getValue('MODULE_NAME')]['main_file']))) {?>
                <div class="ms-3">
                    <a href="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('go_clientmod');?>
" target="_blank" data-bs-toggle="tooltip"><i class="fa-solid fa-globe fa-lg"></i></a>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="p-4">
            <?php echo $_smarty_tpl->getValue('MODULE_CONTENT');?>

        </div>
    </section>
</div>
<aside class="right-sidebar border-start" id="right-sidebar">
    <div class="right-sidebar-inner">
        <div class="px-3">
            <?php if (!( !$_smarty_tpl->hasVariable('LANG_ADMIN') || empty($_smarty_tpl->getValue('LANG_ADMIN')))) {?>
            <div class="mb-4">
                <div class="fw-medium border-bottom pb-2 mb-2"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('langinterface');?>
</div>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LANG_ADMIN'), 'langname', false, 'lang');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lang')->value => $_smarty_tpl->getVariable('langname')->value) {
$foreach20DoElse = false;
?>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio" id="langinterface-<?php echo $_smarty_tpl->getValue('lang');?>
" value="<?php echo $_smarty_tpl->getValue('lang');?>
" name="gsitelanginterface"<?php if ($_smarty_tpl->getValue('lang') == (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null)) {?> checked="checked"<?php }?>>
                    <label class="form-check-label" for="langinterface-<?php echo $_smarty_tpl->getValue('lang');?>
"><?php echo $_smarty_tpl->getValue('langname');?>
</label>
                </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <div class="mb-4">
                <div class="fw-medium border-bottom pb-2 mb-3"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('langdata');?>
</div>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LANG_ADMIN'), 'langname', false, 'lang');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lang')->value => $_smarty_tpl->getVariable('langname')->value) {
$foreach21DoElse = false;
?>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="radio" id="langdata-<?php echo $_smarty_tpl->getValue('lang');?>
" value="<?php echo $_smarty_tpl->getValue('lang');?>
" name="gsitelangdata"<?php if ($_smarty_tpl->getValue('lang') == (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null)) {?> checked="checked"<?php }?>>
                    <label class="form-check-label" for="langdata-<?php echo $_smarty_tpl->getValue('lang');?>
"><?php echo $_smarty_tpl->getValue('langname');?>
</label>
                </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>
            <div class="mb-4 color-mode" id="site-color-mode" data-busy="0">
                <div class="fw-medium border-bottom pb-2 mb-3"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('color_mode');?>
</div>
                <div class="mb-2">
                    <a href="#" class="d-block<?php if ($_smarty_tpl->getValue('TCONFIG')['color_mode'] == 'light') {?> active<?php }?>" data-mode="light"><i class="fa-solid fa-sun fa-fw" data-icon="fa-sun"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('color_mode_light');?>
</a>
                </div>
                <div class="mb-2">
                    <a href="#" class="d-block<?php if ($_smarty_tpl->getValue('TCONFIG')['color_mode'] == 'dark') {?> active<?php }?>" data-mode="dark"><i class="fa-solid fa-moon fa-fw" data-icon="fa-moon"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('color_mode_dark');?>
</a>
                </div>
                <div class="mb-2">
                    <a href="#" class="d-block<?php if ($_smarty_tpl->getValue('TCONFIG')['color_mode'] == 'auto') {?> active<?php }?>" data-mode="auto"><i class="fa-solid fa-circle-half-stroke fa-fw" data-icon="fa-circle-half-stroke"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('color_mode_auto');?>
</a>
                </div>
            </div>
            <div class="mb-4 color-mode" id="site-text-direction" data-busy="0">
                <div class="fw-medium border-bottom pb-2 mb-3"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('text_direction');?>
</div>
                <div class="mb-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" name="g_themedir" value="ltr" class="btn-check" id="theme-dir-ltr" autocomplete="off"<?php if ($_smarty_tpl->getValue('TCONFIG')['dir'] == 'ltr') {?> checked="checked"<?php }?>>
                            <label class="btn btn-outline-primary d-block" for="theme-dir-ltr"><i class="fa-solid fa-align-left" data-icon="fa-align-left"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('text_direction_ltr');?>
</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="g_themedir" value="rtl" class="btn-check" id="theme-dir-rtl" autocomplete="off"<?php if ($_smarty_tpl->getValue('TCONFIG')['dir'] == 'rtl') {?> checked="checked"<?php }?>>
                            <label class="btn btn-outline-primary d-block" for="theme-dir-rtl"><i class="fa-solid fa-align-right" data-icon="fa-align-right"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('text_direction_rtl');?>
</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<footer class="site-footer border-top px-4 d-flex align-items-center justify-content-between">
    <div class="site-copyright text-truncate me-3">
        <?php if ((defined('NV_IS_SPADMIN') ? constant('NV_IS_SPADMIN') : null) && $_smarty_tpl->getValue('ADMIN_INFO')['level'] == 1) {?>
        <div class="memory-time-usage text-truncate" title="[MEMORY_TIME_USAGE]">[MEMORY_TIME_USAGE]</div>
        <?php }?>
        <div class="fw-medium text-truncate" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('copyright',$_smarty_tpl->getValue('GCONFIG')['site_name']);?>
"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('copyright',$_smarty_tpl->getValue('GCONFIG')['site_name']);?>
</div>
    </div>
    <div class="img-stat">
        <a title="NUKEVIET CMS" href="https://nukeviet.vn" target="_blank"><img alt="NUKEVIET CMS" src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);
echo (defined('NV_ASSETS_DIR') ? constant('NV_ASSETS_DIR') : null);?>
/images/banner_nukeviet_88x15.jpg" width="88" height="15" class="imgstatnkv"></a>
    </div>
</footer>
<div id="admin-session-timeout" class="nv-offcanvas text-bg-warning p-3">
    <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('timeoutsess_nouser');?>
, <a data-toggle="cancel" href="#"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('timeoutsess_click');?>
</a>. <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('timeoutsess_timeout');?>
: <span data-toggle="sec"> 60 </span> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('sec');?>

</div>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
