<?php
/* Smarty version 5.4.3, created on 2025-03-24 22:36:17
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e17bf16510c2_06120488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99226821309f02e8c7d0a42e9c24d8c5e7c8bc5a' => 
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
function content_67e17bf16510c2_06120488 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\modules';
$_smarty_tpl->assign('tblNames', array('act'=>((string)$_smarty_tpl->getValue('LANG')->getModule('caption_actmod')),'deact'=>((string)$_smarty_tpl->getValue('LANG')->getModule('caption_deactmod')),'bad'=>((string)$_smarty_tpl->getValue('LANG')->getModule('caption_badmod'))), false, NULL);?>
<div class="vstack gap-4">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ARRAY'), 'mods', false, 'tblname');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tblname')->value => $_smarty_tpl->getVariable('mods')->value) {
$foreach0DoElse = false;
?>
    <?php if (!( !$_smarty_tpl->hasVariable('mods') || empty($_smarty_tpl->getValue('mods')))) {?>
    <div class="card">
        <div class="card-header fs-5 fw-medium"><?php echo $_smarty_tpl->getValue('tblNames')[$_smarty_tpl->getValue('tblname')];?>
</div>
        <div class="card-body">
            <div class="table-responsive-lg table-card">
                <table class="table table-striped align-middle table-sticky mb-0">
                    <thead>
                        <tr>
                            <th class="text-nowrap" style="width: 10%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('weight');?>
</th>
                            <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('module_name');?>
</th>
                            <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('custom_title');?>
</th>
                            <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('version');?>
</th>
                            <th class="text-nowrap text-center" style="width: 10%;"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('activate');?>
</th>
                            <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('actions');?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('mods'), 'mod', false, 'mod_title');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('mod_title')->value => $_smarty_tpl->getVariable('mod')->value) {
$foreach1DoElse = false;
?>
                        <tr>
                            <td>
                                <select data-toggle="changeWeiModule" data-mod="<?php echo $_smarty_tpl->getValue('mod_title');?>
" name="change_weight_<?php echo $_smarty_tpl->getValue('mod_title');?>
" id="change_weight_<?php echo $_smarty_tpl->getValue('mod_title');?>
" class="form-select fw-75">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('WEIGHT_LIST'), 'weight');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('weight')->value) {
$foreach2DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('weight');?>
"<?php if ($_smarty_tpl->getValue('weight') == $_smarty_tpl->getValue('mod')['weight']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('weight');?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </td>
                            <td class="text-break">
                                <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=show&amp;mod=<?php echo $_smarty_tpl->getValue('mod_title');?>
"><i class="fa-solid fa-magnifying-glass"></i> <?php echo $_smarty_tpl->getValue('mod')['title'];?>
</a>
                            </td>
                            <td><?php echo $_smarty_tpl->getValue('mod')['custom_title'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('mod')['version'];?>
</td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" role="switch" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('activate');?>
" data-toggle="changeActModule" data-mod="<?php echo $_smarty_tpl->getValue('mod_title');?>
" data-checkss="<?php echo $_smarty_tpl->getValue('mod')['act_checkss'];?>
" name="change_act_<?php echo $_smarty_tpl->getValue('mod_title');?>
" id="change_act_<?php echo $_smarty_tpl->getValue('mod_title');?>
"<?php if ($_smarty_tpl->getValue('mod')['act'] && $_smarty_tpl->getValue('tblname') == 'act') {?> checked<?php }
if (!$_smarty_tpl->getValue('mod')['act_allowed'] && $_smarty_tpl->getValue('mod')['act']) {?> disabled<?php }?>>
                                    </div>
                                </div>
                            </td>
                            <td class="text-norwap">
                                <div class="d-flex gap-1">
                                    <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=edit&amp;mod=<?php echo $_smarty_tpl->getValue('mod_title');?>
" class="btn text-nowrap btn-sm btn-secondary"><i class="fa-solid fa-pencil"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('edit');?>
</a>
                                    <button type="button" class="btn text-nowrap btn-sm btn-secondary" data-toggle="recreateModule" data-mod="<?php echo $_smarty_tpl->getValue('mod_title');?>
"><i class="fa-solid fa-sun" data-icon="fa-sun"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('recreate');?>
</button>
                                    <?php if ($_smarty_tpl->getValue('mod')['del']) {?>
                                    <button data-toggle="deleteModule" data-mod="<?php echo $_smarty_tpl->getValue('mod_title');?>
" data-checkss="<?php echo $_smarty_tpl->getValue('mod')['del_checkss'];?>
" type="button" class="btn text-nowrap btn-sm btn-secondary"><i class="fa-solid fa-trash text-danger" data-icon="fa-trash"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('delete');?>
</button>
                                    <?php }?>
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
    <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<!-- START FORFOOTER -->
<div class="modal fade" id="modal-reinstall-module" tabindex="-1" aria-labelledby="modal-reinstall-module-lbl" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content ajax-submit" method="post" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=recreate_mod" novalidate>
            <div class="modal-header">
                <div class="modal-title fs-5 fw-medium" id="modal-reinstall-module-lbl"><?php echo $_smarty_tpl->getValue('LANG')->getModule('reinstall_module');?>
</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <div class="modal-body">
                <div class="text-primary message"></div>
                <div class="showoption mt-3">
                    <label class="form-label fw-medium" for="modal-reinstall-module-sel"><?php echo $_smarty_tpl->getValue('LANG')->getModule('reinstall_option');?>
:</label>
                    <select class="form-select option" name="sample" id="modal-reinstall-module-sel">
                        <option value="0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('reinstall_option_0');?>
</option>
                        <option value="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('reinstall_option_1');?>
</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="mod" value="">
                <input type="hidden" name="checkss" value="">
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-sun" data-icon="fa-sun"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('cancel');?>
</button>
            </div>
        </form>
    </div>
</div>
<!-- END FORFOOTER -->
<?php }
}
