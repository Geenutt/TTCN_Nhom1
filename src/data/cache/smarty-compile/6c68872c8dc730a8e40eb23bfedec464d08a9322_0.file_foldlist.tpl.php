<?php
/* Smarty version 5.4.3, created on 2025-03-25 00:27:56
  from 'file:foldlist.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e1961cafa021_83895536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c68872c8dc730a8e40eb23bfedec464d08a9322' => 
    array (
      0 => 'foldlist.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e1961cafa021_83895536 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\upload';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'writeTrees' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\nukeviet\\src\\data\\cache\\smarty-compile\\6c68872c8dc730a8e40eb23bfedec464d08a9322_0.file_foldlist.tpl.php',
    'uid' => '6c68872c8dc730a8e40eb23bfedec464d08a9322',
    'call_name' => 'smarty_template_function_writeTrees_60052995667e1961cab9232_32895491',
  ),
));
?>
<ul>
    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'writeTrees', array('trees'=>$_smarty_tpl->getValue('TREES')), true);?>

</ul>
<?php }
/* smarty_template_function_writeTrees_60052995667e1961cab9232_32895491 */
if (!function_exists('smarty_template_function_writeTrees_60052995667e1961cab9232_32895491')) {
function smarty_template_function_writeTrees_60052995667e1961cab9232_32895491(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\upload';
$params = array_merge(array('name'=>'writeTrees','trees'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('trees'), 'tree');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tree')->value) {
$foreach0DoElse = false;
?>
<li<?php if ($_smarty_tpl->getValue('tree')['active']) {?> class="active"<?php }?> data-toggle="tree"
    data-dir="<?php echo $_smarty_tpl->getValue('tree')['fetch_path'];?>
"
    data-path="<?php echo $_smarty_tpl->getValue('tree')['path'];?>
"
    data-uuid="<?php echo $_smarty_tpl->getValue('tree')['uuid'];?>
"
    data-title="<?php echo $_smarty_tpl->getValue('tree')['title'];?>
"
    data-allowed-create-file="<?php echo $_smarty_tpl->getValue('tree')['allowed']['create_file'] ?? 0;?>
"
    data-allowed-upload-file="<?php echo $_smarty_tpl->getValue('tree')['allowed']['upload_file'] ?? 0;?>
"
    data-allowed-move-file="<?php echo $_smarty_tpl->getValue('tree')['allowed']['move_file'] ?? 0;?>
"
    data-allowed-rename-file="<?php echo $_smarty_tpl->getValue('tree')['allowed']['rename_file'] ?? 0;?>
"
    data-allowed-delete-file="<?php echo $_smarty_tpl->getValue('tree')['allowed']['delete_file'] ?? 0;?>
"
    data-allowed-delete-dir="<?php echo $_smarty_tpl->getValue('tree')['allowed']['delete_dir'] ?? 0;?>
"
    data-allowed-create-dir="<?php echo $_smarty_tpl->getValue('tree')['allowed']['create_dir'] ?? 0;?>
"
    data-allowed-rename-dir="<?php echo $_smarty_tpl->getValue('tree')['allowed']['rename_dir'] ?? 0;?>
"
    data-allowed-rethumb="<?php echo $_smarty_tpl->getValue('tree')['allowed']['recreatethumb'] ?? 0;?>
"
>
    <div class="tree-item">
        <?php if (!( !true || empty($_smarty_tpl->getValue('tree')['sub']))) {?>
        <a class="tree-collapse" data-bs-toggle="collapse" data-bs-target="#fms-tree-<?php echo $_smarty_tpl->getValue('tree')['uuid'];?>
" role="button" aria-expanded="<?php echo $_smarty_tpl->getValue('tree')['open'] ? 'true' : 'false';?>
" aria-controls="fms-tree-<?php echo $_smarty_tpl->getValue('tree')['uuid'];?>
">
            <i class="tree-icon fa-fw pe-none fa-solid <?php echo ($_smarty_tpl->getValue('tree')['open'] && !( !true || empty($_smarty_tpl->getValue('tree')['sub']))) ? 'fa-folder-open' : 'fa-folder-plus';?>
" data-toggle="tree-icon" data-icon="fa-folder-plus"></i>
        </a>
        <?php } else { ?>
        <span class="tree-collapse"><i class="tree-icon fa-fw pe-none fa-solid <?php echo ($_smarty_tpl->getValue('tree')['open'] && !( !true || empty($_smarty_tpl->getValue('tree')['sub']))) ? 'fa-folder-open' : 'fa-folder';?>
" data-toggle="tree-icon" data-icon="fa-folder"></i></span>
        <?php }?>
        <a href="#" class="tree-name text-truncate" data-toggle="tree-name">
            <span class="pe-none"><?php echo $_smarty_tpl->getValue('tree')['title'];?>
</span>
            <?php if (!( !true || empty($_smarty_tpl->getValue('tree')['size']))) {?><span class="pe-none tree-size">(<?php echo $_smarty_tpl->getValue('tree')['size'];?>
)</span><?php }?>
        </a>
        <a href="#" class="tree-menu ms-auto" data-toggle="tree-menu" aria-label="..."><i class="fa-solid fa-ellipsis-vertical"></i></a>
    </div>
    <?php if (!( !true || empty($_smarty_tpl->getValue('tree')['sub']))) {?>
    <div class="sub-tree collapse<?php echo $_smarty_tpl->getValue('tree')['open'] ? ' show' : '';?>
" id="fms-tree-<?php echo $_smarty_tpl->getValue('tree')['uuid'];?>
" data-toggle="collapseTree">
        <ul>
            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'writeTrees', array('trees'=>$_smarty_tpl->getValue('tree')['sub']), true);?>

        </ul>
    </div>
    <?php }?>
</li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_writeTrees_60052995667e1961cab9232_32895491 */
}
