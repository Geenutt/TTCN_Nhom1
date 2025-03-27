<?php
/* Smarty version 5.4.3, created on 2025-03-27 23:57:53
  from 'file:manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e5839154b6d7_57567228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f0c1880deade7cccbe73c1fb7e5d4b6c54fecb' => 
    array (
      0 => 'manage.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e5839154b6d7_57567228 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\extensions';
$_smarty_tpl->assign('themeIcons', array('admin'=>"<i class=\"fa-solid fa-cube\" title=\"".((string)$_smarty_tpl->getValue('LANG')->getModule('extType_admin'))."\"></i>",'sys'=>"<i class=\"fa-solid fa-cubes\" title=\"".((string)$_smarty_tpl->getValue('LANG')->getModule('extType_sys'))."\"></i>"), false, NULL);?>
<div class="card">
    <div class="card-header">
        <div class="d-flex gap-2 justify-content-between align-items-center">
            <?php if ($_smarty_tpl->getValue('GCONFIG')['extension_setup'] == 1 || $_smarty_tpl->getValue('GCONFIG')['extension_setup'] == 3) {?>
            <div>
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><?php echo $_smarty_tpl->getValue('LANG')->getModule('install_package');?>
</button>
                    <div class="dropdown-menu p-3" style="--bs-dropdown-min-width: 280px;">
                        <?php if (( !true || empty($_smarty_tpl->getValue('SYS_INFO')['zlib_support']))) {?>
                        <span class="text-danger fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('error_zlib_support');?>
</span>
                        <?php } else { ?>
                        <form id="formSubmitExt" method="post" enctype="multipart/form-data" data-error-choose="<?php echo $_smarty_tpl->getValue('LANG')->getModule('install_error_nofile');?>
" data-error-type="<?php echo $_smarty_tpl->getValue('LANG')->getModule('install_error_filetype');?>
" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=upload">
                            <input type="hidden" name="checksess" value="<?php echo $_smarty_tpl->getValue('SUBMIT_CHECKSESS');?>
">
                            <div class="input-group">
                                <input type="file" class="form-control" name="extfile">
                                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getModule('install_submit');?>
</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <?php $_smarty_tpl->assign('mode', ($_smarty_tpl->getValue('GCONFIG')['extension_upload_mode'] ?? 0), false, NULL);?>
                            <?php if ($_smarty_tpl->getValue('mode') == 2) {?>
                            <div class="alert alert-danger mb-0" role="alert"><?php echo $_smarty_tpl->getValue('LANG')->getModule('uncontrolled_mode_warning');?>
</div>
                            <?php } elseif ($_smarty_tpl->getValue('mode') == 1) {?>
                            <div class="alert alert-danger mb-0" role="alert"><?php echo $_smarty_tpl->getValue('LANG')->getModule('loose_mode_warning');?>
</div>
                            <?php } else { ?>
                            <i class="fa-solid fa-triangle-exclamation text-warning"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('install_package_alert');?>

                            <?php }?>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php }?>
            <div>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <i class="fa-solid fa-cubes"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('extType_sys');?>

                    </li>
                    <li class="list-inline-item">
                        <i class="fa-solid fa-cube"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('extType_admin');?>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive-lg table-card">
            <table class="table table-striped align-middle table-sticky mb-0">
                <thead class="text-muted">
                    <tr>
                        <th class="text-nowrap" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('ext_type');?>
</th>
                        <th class="text-nowrap" style="width: 25%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('extname');?>
</th>
                        <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('file_version');?>
</th>
                        <th class="text-nowrap" style="width: 40%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('author');?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ARRAY'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->getValue('row')['type'];?>
</td>
                        <td>
                            <div class="d-flex justify-content-between gap-1">
                                <div><?php echo $_smarty_tpl->getValue('row')['basename'];?>
</div>
                                <div class="d-flex gap-1">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('row')['icon'], 'icon');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('icon')->value) {
$foreach1DoElse = false;
?>
                                    <?php echo $_smarty_tpl->getValue('themeIcons')[$_smarty_tpl->getValue('icon')];?>

                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </td>
                        <td><?php echo $_smarty_tpl->getValue('row')['version'];?>
</td>
                        <td>
                            <div class="d-flex justify-content-between gap-1">
                                <div><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('encodehtml')($_smarty_tpl->getValue('row')['author']);?>
</div>
                                <div class="d-flex gap-2">
                                    <a href="<?php echo $_smarty_tpl->getValue('row')['url_package'];?>
" data-bs-toggle="tooltip" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('package');?>
" data-bs-trigger="hover" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('package');?>
"><i class="fa-solid fa-lg fa-file-zipper"></i></a>
                                    <?php if ($_smarty_tpl->getValue('row')['delete_allowed']) {?>
                                    <a href="<?php echo $_smarty_tpl->getValue('row')['url_delete'];?>
" data-bs-toggle="tooltip" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
" data-bs-trigger="hover" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
" data-toggle="deleteExtension" data-confirm="<?php echo $_smarty_tpl->getValue('LANG')->getModule('delele_ext_confirm');?>
"><i class="fa-solid fa-lg fa-trash text-danger" data-icon="fa-trash"></i></a>
                                    <?php }?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<?php }
}
