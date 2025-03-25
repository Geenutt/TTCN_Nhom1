<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:08:01
  from 'file:footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaf17ffd45_59098971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7922d3fef70251a280640ffd070c6fb085d50eca' => 
    array (
      0 => 'footer.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcaf17ffd45_59098971 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\system';
?>        [THEME_ERROR_INFO]
    <div id="site-toasts" class="site-toasts d-none">
        <div class="position-relative toast-lists p-3">
            <div class="toast-items" aria-live="polite" aria-atomic="true">
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->getValue('IS_IE')) {?>
    <div class="nv-offcanvas text-bg-warning p-3 show">
        <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('chromeframe');?>

    </div>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_THEME');?>
/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_THEME');?>
/js/nv.core.js"><?php echo '</script'; ?>
>
    <?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['notification_active'])) && !(!( !$_smarty_tpl->hasVariable('MODULE_NAME') || empty($_smarty_tpl->getValue('MODULE_NAME'))) && $_smarty_tpl->getValue('MODULE_NAME') == 'siteinfo' && $_smarty_tpl->getValue('OP') == 'notification')) {?>
    <?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery/jquery.timeago.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/language/jquery.timeago-<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_THEME');?>
/js/nv.notification.js"><?php echo '</script'; ?>
>
    <?php }?>
</body>
</html>
<?php }
}
