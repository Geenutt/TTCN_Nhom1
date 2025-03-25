<?php
/* Smarty version 5.4.3, created on 2025-03-24 22:38:39
  from 'file:show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e17c7f1ffba6_48937953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a051291ea476c10c5a99a8a11765de22aa16b1f8' => 
    array (
      0 => 'show.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e17c7f1ffba6_48937953 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\modules';
?><div class="card">
    <div class="card-body">
        <div class="table-responsive-lg table-card">
            <table class="table table-striped align-middle table-sticky mb-0">
                <thead>
                    <tr>
                        <th class="text-nowrap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('funcs_subweight');?>
</th>
                        <th class="text-nowrap text-center"><?php echo $_smarty_tpl->getValue('LANG')->getModule('funcs_in_submenu');?>
</th>
                        <th class="text-nowrap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('funcs_title');?>
</th>
                        <?php if ($_smarty_tpl->getValue('MODULE_VERSION')['virtual']) {?>
                        <th class="text-nowrap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('funcs_alias');?>
</th>
                        <?php }?>
                        <th class="text-nowrap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('custom_title');?>
</th>
                        <th class="text-nowrap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_title');?>
</th>
                        <th class="text-nowrap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('description');?>
</th>
                        <th class="text-nowrap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('funcs_layout');?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ACT_FUNCS'), 'funcs', false, 'func_name');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('func_name')->value => $_smarty_tpl->getVariable('funcs')->value) {
$foreach0DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('funcs')['show_func']) {?>
                    <tr>
                        <td>
                            <select data-toggle="changeWeiFunc" data-func-id="<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" name="change_weight_<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" id="change_weight_<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" class="form-select fw-75">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('WEIGHT_LIST'), 'weight');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('weight')->value) {
$foreach1DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('weight');?>
"<?php if ($_smarty_tpl->getValue('weight') == $_smarty_tpl->getValue('funcs')['subweight']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('weight');?>
</option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                        </td>
                        <td class="text-center">
                            <div class="d-inline-flex">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('funcs_in_submenu');?>
" data-toggle="changeMenuFunc" data-func-id="<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" name="chang_func_in_submenu_<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" id="chang_func_in_submenu_<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
"<?php if (!( !true || empty($_smarty_tpl->getValue('funcs')['in_submenu']))) {?> checked<?php }
if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('func_name'),$_smarty_tpl->getValue('IN_SUBMENU'))) {?> disabled<?php }?>>
                                </div>
                            </div>
                        </td>
                        <td class="text-break"><?php echo $_smarty_tpl->getValue('func_name');?>
</td>
                        <?php if ($_smarty_tpl->getValue('MODULE_VERSION')['virtual']) {?>
                        <td class="text-break">
                            <?php if ($_smarty_tpl->getValue('func_name') != 'main' && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('func_name'),$_smarty_tpl->getValue('CHANGE_ALIAS'))) {?>
                            <a href="#" data-toggle="changeValFunc" data-func-id="<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" data-mode="change_alias"><i class="fa-solid fa-pencil" data-icon="fa-pencil"></i> <?php echo $_smarty_tpl->getValue('funcs')['alias'];?>
</a>
                            <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('funcs')['alias'];?>

                            <?php }?>
                        </td>
                        <?php }?>
                        <td><a href="#" data-toggle="changeValFunc" data-func-id="<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" data-mode="change_custom_name"><i class="fa-solid fa-pencil" data-icon="fa-pencil"></i> <?php echo $_smarty_tpl->getValue('funcs')['func_custom_name'];?>
</a></td>
                        <td><a href="#" data-toggle="changeValFunc" data-func-id="<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" data-mode="change_site_title"><i class="fa-solid fa-pencil" data-icon="fa-pencil"></i> <?php echo $_smarty_tpl->getValue('funcs')['func_site_title'];?>
</a></td>
                        <td><a href="#" data-toggle="changeValFunc" data-func-id="<?php echo $_smarty_tpl->getValue('funcs')['func_id'];?>
" data-mode="change_description"><i class="fa-solid fa-pencil" data-icon="fa-pencil"></i> <?php echo $_smarty_tpl->getValue('funcs')['description'] ?: $_smarty_tpl->getValue('LANG')->getModule('empty');?>
</a></td>
                        <td><?php echo $_smarty_tpl->getValue('funcs')['layout'];?>
</td>
                    </tr>
                    <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- START FORFOOTER -->
<div class="modal fade" id="funChange" tabindex="-1" role="dialog" aria-labelledby="funChange-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title fs-5 fw-medium" id="funChange-label"></div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <form class="modal-body" data-toggle="changeValFuncForm">
                <label for="funChange-name" class="form-label fw-medium" id="funChange-title"></label>
                <input type="text" class="form-control" name="newvalue" value="" maxlength="" id="funChange-name">
                <input type="hidden" name="type" value="" id="funChange-type">
                <input type="hidden" name="id" value="" id="funChange-id">
                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk" data-icon="fa-floppy-disk"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark text-danger"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('cancel');?>
</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END FORFOOTER -->
<?php }
}
