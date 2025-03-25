<?php
/* Smarty version 5.4.3, created on 2025-03-25 00:27:56
  from 'file:listfile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e1961cdf9084_03859583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '915b01c47c43ecd33f80a301b7a4c174b3b3edb7' => 
    array (
      0 => 'listfile.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e1961cdf9084_03859583 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\upload';
?><div class="fms-files-wraper">
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('FILES'), 'file');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach1DoElse = false;
?>
        <li>
            <div class="file"
                data-toggle="file"
                data-name="<?php echo $_smarty_tpl->getValue('file')['real_name'];?>
"
                data-ext="<?php echo $_smarty_tpl->getValue('file')['ext'];?>
"
                data-uuid="<?php echo $_smarty_tpl->getValue('file')['uuid'];?>
"
                data-path="<?php echo $_smarty_tpl->getValue('file')['path'];?>
"
                data-nocache-path="<?php echo $_smarty_tpl->getValue('file')['nocache_path'];?>
"
                data-abs-path="<?php echo $_smarty_tpl->getValue('file')['abs_path'];?>
"
                data-dir-path="<?php echo $_smarty_tpl->getValue('file')['dir_path'];?>
"
                data-dir="<?php echo $_smarty_tpl->getValue('file')['dir'];?>
"
                data-alt="<?php echo $_smarty_tpl->getValue('file')['alt'];?>
"
                data-mtime="<?php echo $_smarty_tpl->getValue('file')['mtime'];?>
"
                data-thumb-src="<?php echo $_smarty_tpl->getValue('file')['src'];?>
"
                data-thumb="<?php echo $_smarty_tpl->getValue('file')['thumb'];?>
"
                data-preview-size="<?php echo $_smarty_tpl->getValue('file')['size_detail'];?>
"
                data-type="<?php echo $_smarty_tpl->getValue('file')['type'];?>
"
                data-width="<?php echo $_smarty_tpl->getValue('file')['width'];?>
"
                data-height="<?php echo $_smarty_tpl->getValue('file')['height'];?>
"
                data-filesize="<?php echo $_smarty_tpl->getValue('file')['filesize_show'];?>
"
            >
                <div class="sel">
                    <input class="form-check-input" data-toggle="file-check" type="checkbox" id="<?php echo $_smarty_tpl->getValue('file')['uuid'];?>
-file-checkbox" value="" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('selectimg');?>
">
                </div>
                <div class="thumb<?php if ($_smarty_tpl->getValue('file')['height'] > 0 && ($_smarty_tpl->getValue('file')['width']/$_smarty_tpl->getValue('file')['height']) <= 1.3333333) {?> thumb-v<?php }?>">
                    <span class="thumb-blur" style="background-image: url(<?php echo $_smarty_tpl->getValue('file')['src'];?>
);"></span>
                    <span class="thumb-bg"></span>
                    <img src="<?php echo $_smarty_tpl->getValue('file')['src'];?>
" alt="<?php echo $_smarty_tpl->getValue('file')['alt'];?>
">
                </div>
                <div class="name text-truncate" title="<?php echo $_smarty_tpl->getValue('file')['real_name'];?>
">
                    <span class="name-real"><?php echo $_smarty_tpl->getValue('file')['real_name'];?>
</span>
                    <span class="name-cut"><?php echo $_smarty_tpl->getValue('file')['name'];?>
</span>
                </div>
                <div class="info"><?php echo $_smarty_tpl->getValue('file')['size'];?>
</div>
                <div class="menu">
                    <button type="button" data-toggle="file-menu" class="btn-menu btn btn-sm btn-secondary" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('option');?>
"><i class="fa-solid fa-caret-down fa-fw"></i></button>
                </div>
            </div>
        </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
