<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:08:01
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaf112e757_54952616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d49efb622d28b3cd14d1f3527add54c8c857e86' => 
    array (
      0 => 'header.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcaf112e757_54952616 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\system';
?><!DOCTYPE html>
<html lang="<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
" <?php if (!( !$_smarty_tpl->hasVariable('TCONFIG') || empty($_smarty_tpl->getValue('TCONFIG')))) {?>data-theme="<?php echo $_smarty_tpl->getValue('TCONFIG')['color_mode'];?>
" data-bs-theme="<?php echo $_smarty_tpl->getValue('TCONFIG')['color_mode'];?>
" dir="<?php echo $_smarty_tpl->getValue('TCONFIG')['dir'];?>
"<?php } else { ?>data-theme="auto" data-bs-theme="auto" dir="ltr"<?php }?>>
<head>
    <title><?php echo $_smarty_tpl->getValue('GCONFIG')['site_name'];
echo (defined('NV_TITLEBAR_DEFIS') ? constant('NV_TITLEBAR_DEFIS') : null);
echo $_smarty_tpl->getValue('LANG')->getGlobal('admin_page');
if (!( !$_smarty_tpl->hasVariable('MODULE_INFO') || empty($_smarty_tpl->getValue('MODULE_INFO')))) {
echo (defined('NV_TITLEBAR_DEFIS') ? constant('NV_TITLEBAR_DEFIS') : null);
echo $_smarty_tpl->getValue('MODULE_INFO')['custom_title'];
}?></title>
    <meta name="description" content="<?php ob_start();
echo $_smarty_tpl->getValue('PAGE_TITLE');
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->getValue('GCONFIG')['site_description'] ?: $_prefixVariable2;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="author" content="<?php echo $_smarty_tpl->getValue('GCONFIG')['site_name'];?>
 [<?php echo $_smarty_tpl->getValue('GCONFIG')['site_email'];?>
]">
    <meta name="generator" content="<?php echo $_smarty_tpl->getValue('GCONFIG')['site_name'];?>
">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->getValue('GCONFIG')['site_charset'];?>
">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
    <![endif]-->

    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getValue('FAVICON');?>
">
    <link rel="stylesheet" href="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_THEME');?>
/css/nv.style<?php if (!( !$_smarty_tpl->hasVariable('TCONFIG') || empty($_smarty_tpl->getValue('TCONFIG'))) && $_smarty_tpl->getValue('TCONFIG')['dir'] == 'rtl') {?>.rtl<?php }?>.css">
    <?php if (!( !$_smarty_tpl->hasVariable('CSS_MODULE') || empty($_smarty_tpl->getValue('CSS_MODULE')))) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('CSS_MODULE');?>
" type="text/css">
    <?php }?>

    <?php echo '<script'; ?>
 data-show="inline" type="text/javascript" src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_THEME');?>
/js/nv.head.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    var nv_base_siteurl = '<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
',
        nv_assets_dir = '<?php echo (defined('NV_ASSETS_DIR') ? constant('NV_ASSETS_DIR') : null);?>
',
        nv_lang_data = '<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
',
        nv_lang_interface = '<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
',
        nv_name_variable = '<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
',
        nv_fc_variable = '<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
',
        nv_lang_variable = '<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
',
        nv_module_name = '<?php echo $_smarty_tpl->getValue('MODULE_NAME') ?? '';?>
',
        nv_func_name = '<?php echo $_smarty_tpl->getValue('OP') ?? '';?>
',
        script_name = '<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php',
        nv_my_ofs = <?php echo round((float) (defined('NV_SITE_TIMEZONE_OFFSET') ? constant('NV_SITE_TIMEZONE_OFFSET') : null)/3600, (int) 0, (int) 1);?>
,
        nv_my_abbr = '<?php echo (defined('NV_CURRENTTIME') ? constant('NV_CURRENTTIME') : null);?>
',
        nv_cookie_prefix = '<?php echo $_smarty_tpl->getValue('GCONFIG')['cookie_prefix'];?>
',
        nv_cache_timestamp = '<?php echo $_smarty_tpl->getValue('GCONFIG')['timestamp'];?>
',
        nv_check_pass_mstime = '<?php echo ($_smarty_tpl->getValue('GCONFIG')['admin_check_pass_time']-62)*1000;?>
',
        nv_safemode = <?php echo ( !$_smarty_tpl->hasVariable('ADMIN_INFO') || empty($_smarty_tpl->getValue('ADMIN_INFO'))) ? 1 : $_smarty_tpl->getValue('ADMIN_INFO')['safemode'];?>
,
        nv_area_admin = 1,
        XSSsanitize = <?php echo (int) $_smarty_tpl->getValue('GCONFIG')['admin_XSSsanitize'];?>
,
        nv_whitelisted_tags = [<?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['allowed_html_tags']))) {?>'<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('GCONFIG')['allowed_html_tags'],', ');?>
'<?php }?>],
        nv_whitelisted_attr = <?php echo $_smarty_tpl->getValue('WHITELISTED_ATTR');?>
,
        nv_jsdate_get = '<?php echo $_smarty_tpl->getValue('JSDATE_GET');?>
',
        nv_jsdate_post = '<?php echo $_smarty_tpl->getValue('JSDATE_POST');?>
',
        nv_js_am = '<?php echo $_smarty_tpl->getValue('JS_AM');?>
',
        nv_js_pm = '<?php echo $_smarty_tpl->getValue('JS_PM');?>
';
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_LANG_STATIC_URL') ? constant('ASSETS_LANG_STATIC_URL') : null);?>
/js/language/<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);
echo (defined('AUTO_MINIFIED') ? constant('AUTO_MINIFIED') : null);?>
.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/global<?php echo (defined('AUTO_MINIFIED') ? constant('AUTO_MINIFIED') : null);?>
.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->getValue('GCONFIG')['admin_XSSsanitize']) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/DOMPurify/purify<?php echo $_smarty_tpl->getValue('IS_IE') ? 2 : 3;?>
.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/admin<?php echo (defined('AUTO_MINIFIED') ? constant('AUTO_MINIFIED') : null);?>
.js"><?php echo '</script'; ?>
>
    <?php if (!( !$_smarty_tpl->hasVariable('JS_MODULE') || empty($_smarty_tpl->getValue('JS_MODULE')))) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('JS_MODULE');?>
"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['passshow_button']))) {?>
    <link rel="stylesheet" href="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/show-pass-btn/bootstrap3-show-pass.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/show-pass-btn/bootstrap3-show-pass.js"><?php echo '</script'; ?>
>
    <?php }?>
    <link rel="stylesheet" href="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/perfect-scrollbar/style.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/perfect-scrollbar/min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/stickytableheaders/jquery.stickytableheaders.min.js"><?php echo '</script'; ?>
>
</head>
<body<?php if (!( !true || empty($_smarty_tpl->getValue('TCONFIG')['collapsed_left_sidebar']))) {?> class="collapsed-left-sidebar"<?php }?> data-checksess="<?php echo (defined('NV_CHECK_SESSION') ? constant('NV_CHECK_SESSION') : null);?>
">
<?php }
}
