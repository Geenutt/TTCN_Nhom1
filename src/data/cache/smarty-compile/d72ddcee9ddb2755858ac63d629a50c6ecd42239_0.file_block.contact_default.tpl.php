<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:07:58
  from 'file:block.contact_default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaee071849_03734188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd72ddcee9ddb2755858ac63d629a50c6ecd42239' => 
    array (
      0 => 'block.contact_default.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcaee071849_03734188 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\modules\\contact\\smarty';
?><span class="visible-xs-inline-block"><a title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('contactUs');?>
" class="pointer button" data-toggle="tip" data-target="#contactList" data-click="y"><em class="icon-old-phone icon-lg"></em><span class="hidden"><?php echo $_smarty_tpl->getValue('LANG')->getModule('contactUs');?>
</span></a></span>
<div id="contactList" class="content">
<strong class="visible-xs-inline-block margin-bottom"><?php echo $_smarty_tpl->getValue('LANG')->getModule('contactUs');?>
</strong>
<ul class="contactList">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA'), 'cd');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cd')->value) {
$foreach3DoElse = false;
?>
<li><?php if ($_smarty_tpl->getValue('cd')['type'] == 'phone') {?><em class="fa fa-phone" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('phonenumber');?>
"></em>&nbsp;<span><?php $_smarty_tpl->assign('i', 0, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cd')['value'], 'num');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('num')->value) {
$foreach4DoElse = false;
$_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);
if ($_smarty_tpl->getValue('i') > 1) {?>, <?php }
if ((true && (true && null !== ($_smarty_tpl->getValue('num')[1] ?? null)))) {?><a href="tel:<?php echo $_smarty_tpl->getValue('num')[1];?>
"><?php echo $_smarty_tpl->getValue('num')[0];?>
</a><?php } else {
echo $_smarty_tpl->getValue('num')[0];
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span><?php } elseif ($_smarty_tpl->getValue('cd')['type'] == 'fax') {?><em class="fa fa-print" title="Fax"></em>&nbsp;<span><?php echo $_smarty_tpl->getValue('cd')['value'];?>
</span><?php } elseif ($_smarty_tpl->getValue('cd')['type'] == 'email') {?><em class="fa fa-envelope-o" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('email');?>
"></em>&nbsp;<span><?php $_smarty_tpl->assign('i', 0, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cd')['value'], 'email');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('email')->value) {
$foreach5DoElse = false;
$_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);
if ($_smarty_tpl->getValue('i') > 1) {?>, <?php }?><a href="<?php echo $_smarty_tpl->getValue('MODULE_URL');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('escape')($_smarty_tpl->getValue('email'), "hexentity");?>
</a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span><?php } elseif ($_smarty_tpl->getValue('cd')['type'] == 'skype') {?><em class="fa fa-skype" title="Skype"></em>&nbsp;<span><?php $_smarty_tpl->assign('i', 0, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cd')['value'], 'skype');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('skype')->value) {
$foreach6DoElse = false;
$_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);
if ($_smarty_tpl->getValue('i') > 1) {?>, <?php }?><a href="skype:<?php echo $_smarty_tpl->getValue('skype');?>
?call"><?php echo $_smarty_tpl->getValue('skype');?>
</a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span><?php } elseif ($_smarty_tpl->getValue('cd')['type'] == 'viber') {?><em class="icon-viber" title="Viber"></em>&nbsp;<span><?php $_smarty_tpl->assign('i', 0, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cd')['value'], 'viber');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('viber')->value) {
$foreach7DoElse = false;
$_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);
if ($_smarty_tpl->getValue('i') > 1) {?>, <?php }?><a href="viber://pa?chatURI=<?php echo $_smarty_tpl->getValue('viber');?>
?call"><?php echo $_smarty_tpl->getValue('viber');?>
</a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span><?php } elseif ($_smarty_tpl->getValue('cd')['type'] == 'whatsapp') {?><em class="fa fa-whatsapp" title="WhatsApp"></em>&nbsp;<span><?php $_smarty_tpl->assign('i', 0, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cd')['value'], 'whatsapp');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('whatsapp')->value) {
$foreach8DoElse = false;
$_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);
if ($_smarty_tpl->getValue('i') > 1) {?>, <?php }?><a href="https://wa.me/<?php echo $_smarty_tpl->getValue('whatsapp');?>
"><?php echo $_smarty_tpl->getValue('whatsapp');?>
</a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span><?php } elseif ($_smarty_tpl->getValue('cd')['type'] == 'zalo') {?><em class="icon-zalo" title="Zalo"></em>&nbsp;<span><?php $_smarty_tpl->assign('i', 0, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cd')['value'], 'zalo');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('zalo')->value) {
$foreach9DoElse = false;
$_smarty_tpl->assign('i', $_smarty_tpl->getValue('i')+1, false, NULL);
if ($_smarty_tpl->getValue('i') > 1) {?>, <?php }?><a href="https://zalo.me/<?php echo $_smarty_tpl->getValue('zalo');?>
"><?php echo $_smarty_tpl->getValue('zalo');?>
</a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span><?php } else { ?><span><?php echo $_smarty_tpl->getValue('cd')['type'];?>
:</span>&nbsp;<span><?php if ($_smarty_tpl->getValue('cd')['value']['is_url']) {?><a href="<?php echo $_smarty_tpl->getValue('cd')['value']['content'];?>
"><?php echo $_smarty_tpl->getValue('cd')['value']['content'];?>
</a><?php } else {
echo $_smarty_tpl->getValue('cd')['value']['content'];
}?></span><?php }?></li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul>
</div>
<?php }
}
