<?php
/* Smarty version 5.4.3, created on 2025-03-25 00:27:54
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e1961a72d1f3_35886894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9251970ffea3aaf3e36253b32ed75b2a30fee5ac' => 
    array (
      0 => 'main.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e1961a72d1f3_35886894 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\upload';
echo '<script'; ?>
 src="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=upload&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=js&amp;langinterface=<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
&amp;t=<?php echo (defined('SYS_CACHE_TIMESTAMP') ? constant('SYS_CACHE_TIMESTAMP') : null);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
document.addEventListener('nv.picker.ready', () => {
    new nukeviet.Picker('#inline-picker', {
        show: 'inline',
        path: '<?php echo $_smarty_tpl->getValue('REQUEST')['path'];?>
',
        currentpath: '<?php echo $_smarty_tpl->getValue('REQUEST')['currentpath'];?>
',
        type: '<?php echo $_smarty_tpl->getValue('REQUEST')['type'];?>
',
        popup: <?php echo $_smarty_tpl->getValue('REQUEST')['popup'];?>
,
        imgfile: '<?php echo $_smarty_tpl->getValue('REQUEST')['currentfile'];?>
',
        CKEditorFuncNum: <?php echo $_smarty_tpl->getValue('REQUEST')['CKEditorFuncNum'];?>
,
        editorId: '<?php echo $_smarty_tpl->getValue('REQUEST')['editor_id'];?>
',
        area: '<?php echo $_smarty_tpl->getValue('REQUEST')['area'];?>
',
        alt: '<?php echo $_smarty_tpl->getValue('REQUEST')['alt'];?>
'
    });
});
<?php echo '</script'; ?>
>
<div class="fms-ctn-<?php echo $_smarty_tpl->getValue('REQUEST')['popup'] ? 'fullscreen' : 'page';?>
 card">
    <div id="inline-picker" class="h-100 d-flex align-items-center justify-content-center">
        <i class="fa-solid fa-spinner fa-spin-pulse fa-3x"></i>
    </div>
</div>
<?php }
}
