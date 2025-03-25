<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:08:09
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaf97f1ff3_76753983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b809dd60d167d2fadbb34b57272956835ee12e2' => 
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
function content_67cdcaf97f1ff3_76753983 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\siteinfo';
if ($_smarty_tpl->getValue('PACKAGE_UPDATE')) {?>
<div class="card text-bg-primary mb-4" id="notice-update-package">
    <div class="card-body text-center">
        <p class="mb-2"><?php echo $_smarty_tpl->getValue('LANG')->getModule('update_package_detected');?>
</p>
        <div class="row g-3 justify-content-center">
            <div class="col-auto">
                <a href="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
install/update.php" class="btn btn-secondary"><i class="fa-solid fa-arrow-up-from-bracket text-primary"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('update_package_do');?>
</a>
            </div>
            <div class="col-auto">
                <a href="#" class="btn btn-secondary" data-toggle="deleteUpdPkg" data-checksess="<?php echo (defined('NV_CHECK_SESSION') ? constant('NV_CHECK_SESSION') : null);?>
"><i class="fa-solid fa-trash text-danger" data-icon="fa-trash"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('update_package_delete');?>
</a>
            </div>
        </div>
    </div>
</div>
<?php }
if ($_smarty_tpl->getValue('IS_EDIT')) {?>
<link type="text/css" href="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php }?>
<div class="widget-containers" data-busy="0">
    <div class="row">
        <?php if ($_smarty_tpl->getValue('IS_EDIT')) {?>
        <div class="text-center mb-3">
            <button class="btn btn-primary" data-toggle="widgetParentAdd" data-placement="top"><i class="fa-solid fa-plus" data-icon="fa-plus"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('add_widget_top');?>
</button>
        </div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('TCONFIG')['grid_widgets'], 'widget', false, 'widget_id');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('widget_id')->value => $_smarty_tpl->getVariable('widget')->value) {
$foreach5DoElse = false;
?>
        <div class="<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('widget')['sizes'], 'colsize', false, 'breakpoint');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('breakpoint')->value => $_smarty_tpl->getVariable('colsize')->value) {
$foreach6DoElse = false;
?>col-<?php echo $_smarty_tpl->getValue('breakpoint');?>
-<?php echo $_smarty_tpl->getValue('colsize');?>
 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if (( !true || empty($_smarty_tpl->getValue('widget')['subs'])) || $_smarty_tpl->getValue('IS_EDIT')) {?> mb-4<?php }?>" data-append-class="<?php if (( !true || empty($_smarty_tpl->getValue('widget')['subs'])) || $_smarty_tpl->getValue('IS_EDIT')) {?> mb-4<?php }?>">
            <?php if ($_smarty_tpl->getValue('IS_EDIT')) {?>
            <div class="widget-edit<?php if (( !true || empty($_smarty_tpl->getValue('widget')['subs']))) {?> widget-edit-drop<?php }?> position-relative bg-warning-subtle p-1<?php if (!( !true || empty($_smarty_tpl->getValue('widget')['subs']))) {?> pt-4 pb-0<?php }?>" id="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
" data-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" data-parent-id="-1">
            <?php }?>
            <?php if (!( !true || empty($_smarty_tpl->getValue('widget')['subs']))) {?>
            <div class="row h-100">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('widget')['subs'], 'subwidget', false, 'widget_subid');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('widget_subid')->value => $_smarty_tpl->getVariable('subwidget')->value) {
$foreach7DoElse = false;
?>
                <div class="<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subwidget')['sizes'], 'colsize', false, 'breakpoint');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('breakpoint')->value => $_smarty_tpl->getVariable('colsize')->value) {
$foreach8DoElse = false;
?>col-<?php echo $_smarty_tpl->getValue('breakpoint');?>
-<?php echo $_smarty_tpl->getValue('colsize');?>
 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> mb-4" data-append-class="mb-4">
                    <?php if ($_smarty_tpl->getValue('IS_EDIT')) {?>
                    <div class="widget-edit widget-edit-drop position-relative bg-info-subtle p-1" id="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_sub<?php echo $_smarty_tpl->getValue('widget_subid');?>
" data-id="<?php echo $_smarty_tpl->getValue('widget_subid');?>
" data-parent-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
">
                    <?php }?>
                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('WIDGETS')[$_smarty_tpl->getValue('subwidget')['widget_id']] ?? null)))) {?>
                    <div class="card widget">
                        <?php echo $_smarty_tpl->getValue('WIDGETS')[$_smarty_tpl->getValue('subwidget')['widget_id']];?>

                    </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('IS_EDIT')) {?>
                    <div class="tools position-absolute top-50 start-50 translate-middle">
                        <div class="d-flex">
                            <div class="dropdown" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('widget_resize');?>
">
                                <a href="#" data-widget="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_sub<?php echo $_smarty_tpl->getValue('widget_subid');?>
" data-toggle="widgetSize" class="text-bg-secondary rounded-circle position-relative d-block ic" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5" data-bs-auto-close="outside"><i class="fa-solid fa-ellipsis ico-vc fa-sm"></i></a>
                                <div class="dropdown-menu px-3 pt-3 pb-1">
                                    <p class="fw-medium mb-2"><?php echo $_smarty_tpl->getValue('LANG')->getModule('sizeby_screen');?>
</p>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('THEME_GRIDS'), 'value', false, 'key');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach9DoElse = false;
?>
                                    <div class="d-flex align-items-center mb-2">
                                        <select data-toggle="widgetResize" data-breakpoint="<?php echo $_smarty_tpl->getValue('key');?>
" data-id="<?php echo $_smarty_tpl->getValue('widget_subid');?>
" data-parent-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" class="form-select form-select-sm widget-col-select me-2" aria-label="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_sub<?php echo $_smarty_tpl->getValue('widget_subid');?>
_size_<?php echo $_smarty_tpl->getValue('key');?>
_label" id="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_sub<?php echo $_smarty_tpl->getValue('widget_subid');?>
_size_<?php echo $_smarty_tpl->getValue('key');?>
">
                                            <?php
$_smarty_tpl->assign('col', null);$_smarty_tpl->tpl_vars['col']->step = 1;$_smarty_tpl->tpl_vars['col']->total = (int) ceil(($_smarty_tpl->tpl_vars['col']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['col']->step));
if ($_smarty_tpl->tpl_vars['col']->total > 0) {
for ($_smarty_tpl->tpl_vars['col']->value = 1, $_smarty_tpl->tpl_vars['col']->iteration = 1;$_smarty_tpl->tpl_vars['col']->iteration <= $_smarty_tpl->tpl_vars['col']->total;$_smarty_tpl->tpl_vars['col']->value += $_smarty_tpl->tpl_vars['col']->step, $_smarty_tpl->tpl_vars['col']->iteration++) {
$_smarty_tpl->tpl_vars['col']->first = $_smarty_tpl->tpl_vars['col']->iteration === 1;$_smarty_tpl->tpl_vars['col']->last = $_smarty_tpl->tpl_vars['col']->iteration === $_smarty_tpl->tpl_vars['col']->total;?>
                                            <option value="<?php echo $_smarty_tpl->getValue('col');?>
"<?php if ($_smarty_tpl->getValue('col') == $_smarty_tpl->getValue('subwidget')['sizes'][$_smarty_tpl->getValue('key')]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getValue('col');?>
</option>
                                            <?php }
}
?>
                                        </select>
                                        <label for="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_sub<?php echo $_smarty_tpl->getValue('widget_subid');?>
_size_<?php echo $_smarty_tpl->getValue('key');?>
" id="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_sub<?php echo $_smarty_tpl->getValue('widget_subid');?>
_size_<?php echo $_smarty_tpl->getValue('key');?>
_label"><span class="fw-medium"><?php echo $_smarty_tpl->getValue('key');?>
</span> <?php echo $_smarty_tpl->getValue('value');?>
</label>
                                    </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                            <a data-toggle="widgetChoose" data-id="<?php echo $_smarty_tpl->getValue('widget_subid');?>
" data-parent-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" href="#" class="ms-2 text-bg-info rounded-circle position-relative ic" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('choose_widget');?>
"><i class="fa-solid fa-pen ico-vc fa-sm"></i></a>
                            <a data-toggle="widgetDelete" data-id="<?php echo $_smarty_tpl->getValue('widget_subid');?>
" data-parent-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" href="#" class="ms-2 text-bg-danger rounded-circle position-relative ic" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('delete_widget');?>
"><i class="fa-solid fa-xmark ico-vc fa-sm" data-icon="fa-xmark"></i></a>
                        </div>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <?php } else { ?>
            <?php if ((true && (true && null !== ($_smarty_tpl->getValue('WIDGETS')[$_smarty_tpl->getValue('widget')['widget_id']] ?? null)))) {?>
            <div class="card widget">
                <?php echo $_smarty_tpl->getValue('WIDGETS')[$_smarty_tpl->getValue('widget')['widget_id']];?>

            </div>
            <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('IS_EDIT')) {?>
            <div class="tools top-0 position-absolute start-100 translate-middle">
                <div class="d-flex">
                    <a href="#" data-toggle="widgetAddChild" data-placement="top" data-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" class="text-bg-primary rounded-circle position-relative ic" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('addchild_widget_top');?>
"><i class="fa-solid fa-plus ico-vc"></i></a>
                </div>
            </div>
            <div class="tools top-100 position-absolute tool-bottom">
                <div class="d-flex">
                    <a href="#" data-toggle="widgetAddChild" data-placement="bottom" data-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" class="text-bg-primary rounded-circle position-relative ic" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('addchild_widget_bottom');?>
"><i class="fa-solid fa-plus ico-vc"></i></a>
                </div>
            </div>
            <div class="tools position-absolute <?php if (!( !true || empty($_smarty_tpl->getValue('widget')['subs']))) {?>tool-top start-50 translate-middle-x<?php } else { ?>top-50 start-50 translate-middle<?php }?>">
                <div class="d-flex">
                    <div class="dropdown" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('widget_resize');?>
">
                        <a href="#" data-widget="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
" data-toggle="widgetSize" class="text-bg-secondary rounded-circle position-relative d-block ic" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5" data-bs-auto-close="outside"><i class="fa-solid fa-ellipsis ico-vc fa-sm"></i></a>
                        <div class="dropdown-menu px-3 pt-3 pb-1">
                            <p class="fw-medium mb-2"><?php echo $_smarty_tpl->getValue('LANG')->getModule('sizeby_screen');?>
</p>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('THEME_GRIDS'), 'value', false, 'key');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach10DoElse = false;
?>
                            <div class="d-flex align-items-center mb-2">
                                <select data-toggle="widgetResize" data-breakpoint="<?php echo $_smarty_tpl->getValue('key');?>
" data-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" data-parent-id="-1" class="form-select form-select-sm widget-col-select me-2" aria-label="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_size_<?php echo $_smarty_tpl->getValue('key');?>
_label" id="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_size_<?php echo $_smarty_tpl->getValue('key');?>
">
                                    <?php
$_smarty_tpl->assign('col', null);$_smarty_tpl->tpl_vars['col']->step = 1;$_smarty_tpl->tpl_vars['col']->total = (int) ceil(($_smarty_tpl->tpl_vars['col']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['col']->step));
if ($_smarty_tpl->tpl_vars['col']->total > 0) {
for ($_smarty_tpl->tpl_vars['col']->value = 1, $_smarty_tpl->tpl_vars['col']->iteration = 1;$_smarty_tpl->tpl_vars['col']->iteration <= $_smarty_tpl->tpl_vars['col']->total;$_smarty_tpl->tpl_vars['col']->value += $_smarty_tpl->tpl_vars['col']->step, $_smarty_tpl->tpl_vars['col']->iteration++) {
$_smarty_tpl->tpl_vars['col']->first = $_smarty_tpl->tpl_vars['col']->iteration === 1;$_smarty_tpl->tpl_vars['col']->last = $_smarty_tpl->tpl_vars['col']->iteration === $_smarty_tpl->tpl_vars['col']->total;?>
                                    <option value="<?php echo $_smarty_tpl->getValue('col');?>
"<?php if ($_smarty_tpl->getValue('col') == $_smarty_tpl->getValue('widget')['sizes'][$_smarty_tpl->getValue('key')]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getValue('col');?>
</option>
                                    <?php }
}
?>
                                </select>
                                <label for="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_size_<?php echo $_smarty_tpl->getValue('key');?>
" id="widget_<?php echo $_smarty_tpl->getValue('widget_id');?>
_size_<?php echo $_smarty_tpl->getValue('key');?>
_label"><span class="fw-medium"><?php echo $_smarty_tpl->getValue('key');?>
</span> <?php echo $_smarty_tpl->getValue('value');?>
</label>
                            </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <?php if (( !true || empty($_smarty_tpl->getValue('widget')['subs']))) {?>
                    <a href="#" data-toggle="widgetChoose" data-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" data-parent-id="-1" class="ms-2 text-bg-info rounded-circle position-relative ic" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('choose_widget');?>
"><i class="fa-solid fa-pen ico-vc fa-sm"></i></a>
                    <?php }?>
                    <a href="#" data-toggle="widgetDelete" data-id="<?php echo $_smarty_tpl->getValue('widget_id');?>
" data-parent-id="-1" class="ms-2 text-bg-danger rounded-circle position-relative ic" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('delete_widget');?>
"><i class="fa-solid fa-xmark ico-vc fa-sm" data-icon="fa-xmark"></i></a>
                </div>
            </div>
            </div>
            <?php }?>
        </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->getValue('IS_EDIT')) {?>
        <div class="text-center">
            <button class="btn btn-primary" data-toggle="widgetParentAdd" data-placement="bottom"><i class="fa-solid fa-plus" data-icon="fa-plus"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('add_widget_bottom');?>
</button>
        </div>
        <?php }?>
    </div>
</div>
<?php if ($_smarty_tpl->getValue('IS_EDIT')) {?>
<div class="modal fade" id="mdChooseWidget" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mdChooseWidgetLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="mdChooseWidgetLabel"><?php echo $_smarty_tpl->getValue('LANG')->getModule('widget_choose');?>
</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <div class="modal-body">
                <div class="loader text-center">
                    <i class="fa-solid fa-spinner fa-spin-pulse fa-3x"></i>
                </div>
                <div class="content"></div>
            </div>
        </div>
    </div>
</div>
<?php }
}
}
