<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:08:08
  from 'file:widget_statistics.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaf8bbca47_62797733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a38715be08c6de966eedaab9cc8503925f3010c' => 
    array (
      0 => 'widget_statistics.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcaf8bbca47_62797733 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\siteinfo';
?><div class="flex-grow-1 flex-shrink-1 d-flex flex-column">
    <div class="p-3 border-bottom border-light-subtle">
        <h5 class="mb-0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('moduleInfo');?>
</h5>
    </div>
    <?php if (( !$_smarty_tpl->hasVariable('STATS') || empty($_smarty_tpl->getValue('STATS')))) {?>
    <div class="m-3 alert alert-info" role="alert"><?php echo $_smarty_tpl->getValue('LANG')->getModule('no_job');?>
</div>
    <?php } else { ?>
    <div class="flex-grow-1 flex-shrink-1">
        <div class="widget-scroller" data-nv-toggle="scroll">
            <div>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('STATS'), 'modinfo');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('modinfo')->value) {
$foreach2DoElse = false;
?>
                <div class="bg-body-tertiary px-3 py-2 fw-medium mb-2">
                    <i class="fa-solid fa-plus fa-sm"></i> <?php echo $_smarty_tpl->getValue('modinfo')['caption'];?>

                </div>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('modinfo')['field'], 'st');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('st')->value) {
$foreach3DoElse = false;
?>
                <div class="px-3 mb-2 d-flex align-items-center justify-content-between">
                    <div class="me-2 text-truncate">
                        <?php if (!( !true || empty($_smarty_tpl->getValue('st')['link']))) {?>
                        <i class="fa-solid fa-minus fa-sm"></i> <a href="<?php echo $_smarty_tpl->getValue('st')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('st')['key'];?>
"><?php echo $_smarty_tpl->getValue('st')['key'];?>
</a>
                        <?php } else { ?>
                        <i class="fa-solid fa-minus fa-sm"></i> <?php echo $_smarty_tpl->getValue('st')['key'];?>

                        <?php }?>
                    </div>
                    <span class="fw-bold"><?php echo $_smarty_tpl->getValue('st')['value'];?>
</span>
                </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
    <?php }?>
</div>
<?php }
}
