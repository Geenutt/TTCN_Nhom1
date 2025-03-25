<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:07:57
  from 'file:global.bootstrap.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaedb695a7_98882267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b78b4f3f4d1161f6696666bf5fd117d64ab89aa9' => 
    array (
      0 => 'global.bootstrap.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcaedb695a7_98882267 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\modules\\menu\\smarty';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\nukeviet\\src\\data\\cache\\smarty-compile\\b78b4f3f4d1161f6696666bf5fd117d64ab89aa9_0.file_global.bootstrap.tpl.php',
    'uid' => 'b78b4f3f4d1161f6696666bf5fd117d64ab89aa9',
    'call_name' => 'smarty_template_function_menu_203093870167cdcaedb10056_87971343',
  ),
));
?>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-site-default">
            <span class="sr-only">&nbsp;</span> <span class="icon-bar">&nbsp;</span> <span class="icon-bar">&nbsp;</span> <span class="icon-bar">&nbsp;</span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="menu-site-default">
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->getValue('MENU')), true);?>

    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" data-show="after">
    $(function() {
        checkWidthMenu();
        $(window).resize(checkWidthMenu);
    });
<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_menu_203093870167cdcaedb10056_87971343 */
if (!function_exists('smarty_template_function_menu_203093870167cdcaedb10056_87971343')) {
function smarty_template_function_menu_203093870167cdcaedb10056_87971343(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\modules\\menu\\smarty';
$params = array_merge(array('name'=>'menu','data'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

<?php $_smarty_tpl->assign('i', 0, false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('data')) > 0) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'entry');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('entry')->value) {
$foreach2DoElse = false;
if ($_smarty_tpl->getValue('i') == 0) {?>
<ul class="<?php if ($_smarty_tpl->getValue('entry')['parentid'] == 0) {?>nav navbar-nav<?php } else { ?>dropdown-menu<?php }?>">
<?php if ($_smarty_tpl->getValue('entry')['parentid'] == 0) {?>
<li><a class="home" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('Home');?>
" href="<?php echo $_smarty_tpl->getValue('THEME_SITE_HREF');?>
" rel="dofollow"><em class="fa fa-lg fa-home">&nbsp;</em><span class="visible-xs-inline-block"> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('Home');?>
</span></a></li>
<?php }
}?>
<li <?php if ($_smarty_tpl->getValue('entry')['parentid'] == 0) {?> role="presentation" class="<?php if (!( !true || empty($_smarty_tpl->getValue('entry')['css']))) {
echo $_smarty_tpl->getValue('entry')['css'];
}
if (!( !true || empty($_smarty_tpl->getValue('entry')['sub']))) {?> dropdown<?php }
if ($_smarty_tpl->getValue('entry')['is_active']) {?> active<?php }?>"<?php } else {
if (!( !true || empty($_smarty_tpl->getValue('entry')['sub']))) {?> class="dropdown-submenu"<?php }
}?>><a href="<?php echo $_smarty_tpl->getValue('entry')['link'];?>
" rel="dofollow"<?php if ($_smarty_tpl->getValue('entry')['parentid'] == 0) {?> role="button"<?php if (!( !true || empty($_smarty_tpl->getValue('entry')['sub']))) {?> class="dropdown-toggle" aria-expanded="false"<?php }
}
if (!( !true || empty($_smarty_tpl->getValue('entry')['note']))) {?> title="<?php echo $_smarty_tpl->getValue('entry')['note'];?>
"<?php }
if (!( !true || empty($_smarty_tpl->getValue('entry')['target']))) {?> <?php echo $_smarty_tpl->getValue('entry')['target'];
}?>><?php if (!( !true || empty($_smarty_tpl->getValue('entry')['icon']))) {?><img src="<?php echo $_smarty_tpl->getValue('entry')['icon'];?>
" alt="" /><?php }
echo $_smarty_tpl->getValue('entry')['title_trim'];
if ($_smarty_tpl->getValue('entry')['parentid'] == 0 && !( !true || empty($_smarty_tpl->getValue('entry')['sub']))) {?> <strong class="caret"></strong><?php }?></a><?php if (!( !true || empty($_smarty_tpl->getValue('entry')['sub']))) {
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->getValue('entry')['sub']), true);
}?></li>
<?php $_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('i') > 0) {?>
</ul>
<?php }
}
}}
/*/ smarty_template_function_menu_203093870167cdcaedb10056_87971343 */
}
