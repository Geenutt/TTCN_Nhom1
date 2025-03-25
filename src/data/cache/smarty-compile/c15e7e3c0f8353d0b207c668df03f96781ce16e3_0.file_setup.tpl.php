<?php
/* Smarty version 5.4.3, created on 2025-03-24 22:36:20
  from 'file:setup.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e17bf46a6df1_73697747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c15e7e3c0f8353d0b207c668df03f96781ce16e3' => 
    array (
      0 => 'setup.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e17bf46a6df1_73697747 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\modules';
?><div class="vstack gap-4">
    <?php if (!( !$_smarty_tpl->hasVariable('MODULES') || empty($_smarty_tpl->getValue('MODULES')))) {?>
    <div class="card">
        <div class="card-header fs-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('module_sys');?>
</div>
        <div class="card-body">
            <div class="table-responsive-lg table-card">
                <table class="table table-striped align-middle table-sticky mb-0">
                    <thead>
                        <tr>
                            <th class="text-nowrap text-center" style="width: 10%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('weight');?>
</th>
                            <th class="text-nowrap" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('module_name');?>
</th>
                            <th class="text-nowrap" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('version');?>
</th>
                            <th class="text-nowrap" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('settime');?>
</th>
                            <th class="text-nowrap" style="width: 25%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('author');?>
</th>
                            <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('actions');?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->assign('stt', 1, false, NULL);?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('MODULES'), 'mod');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('mod')->value) {
$foreach0DoElse = false;
?>
                        <tr>
                            <td class="text-center">
                                <?php echo $_smarty_tpl->getVariable('stt')->postIncDec('++');?>

                            </td>
                            <td class="text-break">
                                <?php echo $_smarty_tpl->getValue('mod')['title'];?>

                            </td>
                            <td><?php echo $_smarty_tpl->getValue('mod')['version'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('mod')['addtime'];?>
</td>
                            <td class="text-break"><?php echo $_smarty_tpl->getValue('mod')['author'];?>
</td>
                            <td class="text-norwap">
                                <button type="button" class="btn text-nowrap btn-sm btn-primary" data-toggle="setupModule" data-mod="<?php echo $_smarty_tpl->getValue('mod')['title'];?>
" data-link="<?php echo $_smarty_tpl->getValue('mod')['url_setup'];?>
"><i class="fa-solid fa-sun" data-icon="fa-sun"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('setup');?>
</button>
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
    <?php if (!( !$_smarty_tpl->hasVariable('VMODULES') || empty($_smarty_tpl->getValue('VMODULES')))) {?>
    <div class="card">
        <div class="card-header fs-5 fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getModule('vmodule');?>
</div>
        <div class="card-body">
            <div class="table-responsive-lg table-card">
                <table class="table table-striped align-middle table-sticky mb-0">
                    <thead>
                        <tr>
                            <th class="text-nowrap text-center" style="width: 10%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('weight');?>
</th>
                            <th class="text-nowrap" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('module_name');?>
</th>
                            <th class="text-nowrap" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('vmodule_file');?>
</th>
                            <th class="text-nowrap" style="width: 15%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('settime');?>
</th>
                            <th class="text-nowrap" style="width: 25%;"><?php echo $_smarty_tpl->getValue('LANG')->getModule('vmodule_note');?>
</th>
                            <th class="text-nowrap" style="width: 20%;"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('actions');?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->assign('stt', 1, false, NULL);?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('VMODULES'), 'mod');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('mod')->value) {
$foreach1DoElse = false;
?>
                        <tr>
                            <td class="text-center">
                                <?php echo $_smarty_tpl->getVariable('stt')->postIncDec('++');?>

                            </td>
                            <td class="text-break">
                                <?php echo $_smarty_tpl->getValue('mod')['title'];?>

                            </td>
                            <td><?php echo $_smarty_tpl->getValue('mod')['module_file'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('mod')['addtime'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('mod')['note'];?>
</td>
                            <td class="text-norwap">
                                <?php if (!( !true || empty($_smarty_tpl->getValue('mod')['url_setup']))) {?>
                                <button type="button" class="btn text-nowrap btn-sm btn-primary" data-toggle="setupModule" data-mod="<?php echo $_smarty_tpl->getValue('mod')['title'];?>
" data-link="<?php echo $_smarty_tpl->getValue('mod')['url_setup'];?>
"><i class="fa-solid fa-sun" data-icon="fa-sun"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('setup');?>
</button>
                                <?php }?>
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
    <?php if (( !$_smarty_tpl->hasVariable('MODULES') || empty($_smarty_tpl->getValue('MODULES'))) && ( !$_smarty_tpl->hasVariable('VMODULES') || empty($_smarty_tpl->getValue('VMODULES')))) {?>
    <div class="alert alert-info" role="alert"><?php echo $_smarty_tpl->getValue('LANG')->getModule('setup_no_module');?>
</div>
    <?php }?>
</div>
<?php if (!( !$_smarty_tpl->hasVariable('AUTOSETUP') || empty($_smarty_tpl->getValue('AUTOSETUP')))) {?><div data-toggle="autosetupModule" data-mod="<?php echo $_smarty_tpl->getValue('AUTOSETUP');?>
" class="d-none"></div><?php }?>
<!-- START FORFOOTER -->
<div class="modal fade" id="modal-setup-module" tabindex="-1" aria-labelledby="modal-setup-module-lbl" aria-hidden="true">
    <div class="modal-dialog">
        <form data-toggle="setupModuleForm" class="modal-content" method="post" action="" data-mod="" novalidate>
            <div class="modal-header">
                <div class="modal-title fs-5 fw-medium" id="modal-setup-module-lbl"><?php echo $_smarty_tpl->getValue('LANG')->getModule('setup');?>
</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <div class="modal-body">
                <div class="vstack gap-3">
                    <div class="sample d-none">
                        <div class="text-primary message mb-2"></div>
                        <label class="form-label" for="modal-setup-module-sel"><?php echo $_smarty_tpl->getValue('LANG')->getModule('setup_option');?>
:</label>
                        <select class="form-select option" id="modal-setup-module-sel">
                            <option value="0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('setup_option_0');?>
</option>
                            <option value="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('setup_option_1');?>
</option>
                        </select>
                    </div>
                    <div class="checkmodulehook d-none">
                        <div class="text-danger messagehook d-none"></div>
                        <input type="hidden" name="hook_files" value="">
                        <div class="hookmodulechoose vstack gap-3" id="hookmodulechoose"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary submit"><i class="fa-solid fa-sun" data-icon="fa-sun"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                <button type="button" class="btn btn-default" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('cancel');?>
</button>
            </div>
        </form>
    </div>
</div>
<!-- END FORFOOTER -->
<?php }
}
