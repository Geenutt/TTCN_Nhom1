<?php
/* Smarty version 5.4.3, created on 2025-03-25 00:27:54
  from 'file:upload_modal.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e1961ac1a235_95909392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f35944bac1ec6b9790bde21266a506ae409653' => 
    array (
      0 => 'upload_modal.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e1961ac1a235_95909392 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\upload';
?><div class="fmm fade" id="fmm" tabindex="-1" aria-labelledby="fmm-label" aria-hidden="true">
    <div class="fmm-dialog">
        <div class="fmm-content">
            <div class="fmm-header">
                <div class="fmm-title text-truncate fs-5 fw-medium" id="fmm-label"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_manager');?>
</div>
                <button type="button" class="btn-close" data-dismiss="fmm" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('close');?>
"></button>
            </div>
            <div class="fmm-body">
                <div class="fms-ctn-fmm" data-toggle="fmm-body">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-spinner fa-spin-pulse fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
