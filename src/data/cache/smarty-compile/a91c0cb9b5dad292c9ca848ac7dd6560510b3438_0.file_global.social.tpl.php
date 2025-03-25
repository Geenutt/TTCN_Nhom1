<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:07:58
  from 'file:global.social.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaeea68470_56669947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91c0cb9b5dad292c9ca848ac7dd6560510b3438' => 
    array (
      0 => 'global.social.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcaeea68470_56669947 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\blocks\\smarty';
?><span class="visible-xs-inline-block"><a title="<?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
" class="pointer button" data-toggle="tip" data-target="#socialList" data-click="y"><em class="fa fa-share-alt fa-lg"></em><span class="hidden"><?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
</span></a></span>
<div id="socialList" class="content">
    <strong class="visible-xs-inline-block margin-bottom"><?php echo $_smarty_tpl->getValue('LANG')->get('joinnow');?>
</strong>
    <ul class="socialList">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('SOCIALS'), 'social');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('social')->value) {
$foreach13DoElse = false;
?>
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('social')['href'];?>
"<?php if ($_smarty_tpl->getValue('social')['target_blank']) {?> target="_blank" rel="noopener"<?php }?> title="<?php echo $_smarty_tpl->getValue('social')['title'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->getValue('social')['icon'];?>
"></i></a>
        </li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
