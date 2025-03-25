<?php
/* Smarty version 5.4.3, created on 2025-03-25 00:27:54
  from 'file:content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e1961aa3e8e4_85332276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0cdda01da06020c4597586dcdd0b779919b8c6' => 
    array (
      0 => 'content.tpl',
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
function content_67e1961aa3e8e4_85332276 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\system';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="body min-vh-100">
    <?php echo $_smarty_tpl->getValue('MODULE_CONTENT');?>

</div>
<div id="admin-session-timeout" class="nv-offcanvas text-bg-warning p-3">
    <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('timeoutsess_nouser');?>
, <a data-toggle="cancel" href="#"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('timeoutsess_click');?>
</a>. <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('timeoutsess_timeout');?>
: <span data-toggle="sec"> 60 </span> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('sec');?>

</div>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
