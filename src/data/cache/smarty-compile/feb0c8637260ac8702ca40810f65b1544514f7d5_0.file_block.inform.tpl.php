<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:09:29
  from 'file:block.inform.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcb49c21088_42125438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb0c8637260ac8702ca40810f65b1544514f7d5' => 
    array (
      0 => 'block.inform.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcb49c21088_42125438 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\modules\\inform\\smarty';
?><link href="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/perfect-scrollbar/style<?php echo (defined('AUTO_MINIFIED') ? constant('AUTO_MINIFIED') : null);?>
.css" rel="stylesheet" />
<link href="<?php echo (defined('NV_STATIC_URL') ? constant('NV_STATIC_URL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('BLOCK_JS');?>
/css/block.inform.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/perfect-scrollbar/min.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('NV_STATIC_URL') ? constant('NV_STATIC_URL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('BLOCK_JS');?>
/js/block.inform.js"><?php echo '</script'; ?>
>

<div class="inform-notification dropdown" id="inform-notification" data-refresh-time="<?php echo $_smarty_tpl->getValue('REFRESH_TIME');?>
" data-url="<?php echo $_smarty_tpl->getValue('INFORM_MODULE_URL');?>
" data-checkinform-url="<?php echo $_smarty_tpl->getValue('CHECK_INFORM_URL');?>
" data-userid="<?php echo $_smarty_tpl->getValue('USERID');?>
" data-usergroups="<?php echo $_smarty_tpl->getValue('USERGROUPS');?>
" data-csrf="<?php echo $_smarty_tpl->getValue('CSRF');?>
">
    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <em class="fa fa-bell-o"></em>
        <span class="new-count" style="display:none"></span>
    </a>
    <div class="dropdown-menu inform-box">
        <div class="inform-header">
            <button type="button" class="btn-close">&times;</button>
            <div class="filter-box">
                <input type="hidden" name="aj_filter" value="<?php echo $_smarty_tpl->getValue('FILTER_DEFAULT');?>
">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('FILTERS'), 'vals', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('vals')->value) {
$foreach0DoElse = false;
?>
                <button type="button" class="btn <?php echo $_smarty_tpl->getValue('key');
if ($_smarty_tpl->getValue('vals')['is_active']) {?> active<?php }?>" data-toggle="changeFilter" data-filter="<?php echo $_smarty_tpl->getValue('key');?>
"><?php echo $_smarty_tpl->getValue('vals')['name'];?>
</button>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="inform-content"></div>
        <div class="inform-footer">
            <a href="#" data-toggle="informNotifyRefresh"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('refresh');?>
</a>
            <a href="<?php echo $_smarty_tpl->getValue('INFORM_VIEWALL_URL');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('viewall');?>
</a>
        </div>
    </div>
</div>
<?php }
}
