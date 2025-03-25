<?php
/* Smarty version 5.4.3, created on 2025-03-25 00:45:37
  from 'file:module.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e19a41db92e1_55273792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17ec035724b77954b85d830b0d99eb66dc7ee89d' => 
    array (
      0 => 'module.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e19a41db92e1_55273792 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\authors';
?><div class="card">
    <div class="card-body">
        <div class="table-responsive-lg table-card">
            <table class="table table-striped align-middle mb-0">
                <thead class="text-muted">
                    <tr>
                        <th class="text-nowrap fw-100" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('number');?>
</th>
                        <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('module');?>
</th>
                        <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('custom_title');?>
</th>
                        <th class="text-nowrap text-center" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('level1');?>
</th>
                        <th class="text-nowrap text-center" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('level2');?>
</th>
                        <th class="text-nowrap text-center" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('level3');?>
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
                        <td>
                            <select class="form-select" data-toggle="wAdnMod" data-checkss="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
" data-id="<?php echo $_smarty_tpl->getValue('row')['mid'];?>
" data-current="<?php echo $_smarty_tpl->getValue('row')['weight'];?>
">
                                <?php
$_smarty_tpl->assign('weight', null);$_smarty_tpl->tpl_vars['weight']->step = 1;$_smarty_tpl->tpl_vars['weight']->total = (int) ceil(($_smarty_tpl->tpl_vars['weight']->step > 0 ? $_smarty_tpl->getValue('NUMROWS')+1 - (1) : 1-($_smarty_tpl->getValue('NUMROWS'))+1)/abs($_smarty_tpl->tpl_vars['weight']->step));
if ($_smarty_tpl->tpl_vars['weight']->total > 0) {
for ($_smarty_tpl->tpl_vars['weight']->value = 1, $_smarty_tpl->tpl_vars['weight']->iteration = 1;$_smarty_tpl->tpl_vars['weight']->iteration <= $_smarty_tpl->tpl_vars['weight']->total;$_smarty_tpl->tpl_vars['weight']->value += $_smarty_tpl->tpl_vars['weight']->step, $_smarty_tpl->tpl_vars['weight']->iteration++) {
$_smarty_tpl->tpl_vars['weight']->first = $_smarty_tpl->tpl_vars['weight']->iteration === 1;$_smarty_tpl->tpl_vars['weight']->last = $_smarty_tpl->tpl_vars['weight']->iteration === $_smarty_tpl->tpl_vars['weight']->total;?>
                                <option value="<?php echo $_smarty_tpl->getValue('weight');?>
"<?php if ($_smarty_tpl->getValue('weight') == $_smarty_tpl->getValue('row')['weight']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('weight');?>
</option>
                                <?php }
}
?>
                            </select>
                        </td>
                        <td><?php echo $_smarty_tpl->getValue('row')['module'];?>
</td>
                        <td><?php if ($_smarty_tpl->getValue('LANG')->existsGlobal($_smarty_tpl->getValue('row')['lang_key'])) {
echo $_smarty_tpl->getValue('LANG')->getGlobal($_smarty_tpl->getValue('row')['lang_key']);
}?></td>
                        <td class="text-center">
                            <div class="form-check form-switch d-inline-block">
                                <input data-toggle="cAdnMod" data-checkss="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
" data-level="1" data-id="<?php echo $_smarty_tpl->getValue('row')['mid'];?>
"<?php if ($_smarty_tpl->getValue('row')['act_1']) {?> checked<?php }?> class="form-check-input" type="checkbox" role="switch" aria-label="<?php echo $_smarty_tpl->getValue('row')['module'];?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('row')['module'],array('siteinfo','authors'))) {?> disabled<?php }?>>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-check form-switch d-inline-block">
                                <input data-toggle="cAdnMod" data-checkss="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
" data-level="2" data-id="<?php echo $_smarty_tpl->getValue('row')['mid'];?>
"<?php if ($_smarty_tpl->getValue('row')['act_2']) {?> checked<?php }?> class="form-check-input" type="checkbox" role="switch" aria-label="<?php echo $_smarty_tpl->getValue('row')['module'];?>
"<?php if ($_smarty_tpl->getValue('row')['module'] == 'siteinfo') {?> disabled<?php }?>>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-check form-switch d-inline-block">
                                <input data-toggle="cAdnMod" data-checkss="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
" data-level="3" data-id="<?php echo $_smarty_tpl->getValue('row')['mid'];?>
"<?php if ($_smarty_tpl->getValue('row')['act_3']) {?> checked<?php }?> class="form-check-input" type="checkbox" role="switch" aria-label="<?php echo $_smarty_tpl->getValue('row')['module'];?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('row')['module'],array('siteinfo','database','settings','site'))) {?> disabled<?php }?>>
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
<?php }
}
