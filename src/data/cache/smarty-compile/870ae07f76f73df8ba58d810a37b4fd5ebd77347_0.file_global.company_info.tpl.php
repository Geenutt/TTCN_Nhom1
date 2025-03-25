<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:07:58
  from 'file:global.company_info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaee55b9d4_44160385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '870ae07f76f73df8ba58d810a37b4fd5ebd77347' => 
    array (
      0 => 'global.company_info.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcaee55b9d4_44160385 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\blocks\\smarty';
?><ul class="company_info" itemscope itemtype="http://schema.org/LocalBusiness">
    <li class="hide hidden">
        <span itemprop="image"><?php echo $_smarty_tpl->getValue('SITE_LOGO');?>
</span>
        <span itemprop="priceRange">N/A</span>
    </li>
<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_name']))) {?>
    <li class="company_name"><span itemprop="name"><?php echo $_smarty_tpl->getValue('DATA')['company_name'];?>
</span><?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_sortname']))) {?> (<span itemprop="alternateName"><?php echo $_smarty_tpl->getValue('DATA')['company_sortname'];?>
</span>)<?php }?></li>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_regcode']))) {?>
    <li><em class="fa fa-file-text"></em><span><?php echo $_smarty_tpl->getValue('DATA')['company_regcode'];?>
</span></li>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_responsibility']))) {?>
    <li><em class="fa fa-flag"></em><span><?php echo $_smarty_tpl->getValue('LANG')->get('company_responsibility');?>
: <span itemprop="founder" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $_smarty_tpl->getValue('DATA')['company_responsibility'];?>
</span></span></span></li>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_address']))) {?>
    <li><a href="#"<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_showmap']))) {?> class="pointer" data-toggle="modal" data-target="#company-map-modal-<?php echo $_smarty_tpl->getValue('DATA')['bid'];?>
"<?php }?>><em class="fa fa-map-marker"></em><span><?php echo $_smarty_tpl->getValue('LANG')->get('company_address');?>
: <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="addressLocality" class="company-address"><?php echo $_smarty_tpl->getValue('DATA')['company_address'];?>
</span></span></span></a></li>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_phone']))) {?>
    <li><em class="fa fa-phone"></em><span><?php echo $_smarty_tpl->getValue('LANG')->get('company_phone');?>
: <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA')['company_phone'], 'value', false, 'key');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach10DoElse = false;
if ($_smarty_tpl->getValue('key') > 0) {?>&nbsp; <?php }
if ((true && (true && null !== ($_smarty_tpl->getValue('value')[1] ?? null)))) {?><a href="tel:<?php echo $_smarty_tpl->getValue('value')[1];?>
"><?php }?><span itemprop="telephone"><?php echo $_smarty_tpl->getValue('value')[0];?>
</span><?php if ((true && (true && null !== ($_smarty_tpl->getValue('value')[1] ?? null)))) {?></a><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span></li>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_fax']))) {?>
    <li><em class="fa fa-fax"></em><span><?php echo $_smarty_tpl->getValue('LANG')->get('company_fax');?>
: <span itemprop="faxNumber"><?php echo $_smarty_tpl->getValue('DATA')['company_fax'];?>
</span></span></li>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_email']))) {?>
    <li><em class="fa fa-envelope"></em><span><?php echo $_smarty_tpl->getValue('LANG')->get('company_email');?>
: <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA')['company_email'], 'value', false, 'key');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach11DoElse = false;
if ($_smarty_tpl->getValue('key') > 0) {?>&nbsp; <?php }?><a href="mailto:<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('escape')($_smarty_tpl->getValue('value'), "hex");?>
"><span itemprop="email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('escape')($_smarty_tpl->getValue('value'), "hexentity");?>
</span></a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span></li>
<?php }
if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_website']))) {?>
    <li><em class="fa fa-globe"></em><span><?php echo $_smarty_tpl->getValue('LANG')->get('company_website');?>
: <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DATA')['company_website'], 'value', false, 'key');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach12DoElse = false;
if ($_smarty_tpl->getValue('key') > 0) {?>&nbsp; <?php }?><a href="<?php echo $_smarty_tpl->getValue('value');?>
" target="_blank"><span itemprop="url"><?php echo $_smarty_tpl->getValue('value');?>
</span></a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></span></li>
<?php }?>
</ul>
<?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['company_address'])) && !( !true || empty($_smarty_tpl->getValue('DATA')['company_showmap']))) {?>
<!-- START FORFOOTER -->
<div class="modal fade company-map-modal" id="company-map-modal-<?php echo $_smarty_tpl->getValue('DATA')['bid'];?>
" data-src="<?php echo $_smarty_tpl->getValue('DATA')['company_mapurl'];?>
">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<!-- END FORFOOTER -->
<?php }
}
}
