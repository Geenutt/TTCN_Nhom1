<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:07:56
  from 'file:block_newscenter.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaecbdc851_83307423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd97a1af7706023ccc60a1e0c5adce7d758e8184b' => 
    array (
      0 => 'block_newscenter.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67cdcaecbdc851_83307423 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\default\\modules\\news\\smarty';
if (( !true || empty($_smarty_tpl->getValue('CONFIGS')['tooltip_length'])) || $_smarty_tpl->getValue('CONFIGS')['tooltip_length'] < 50) {
$_tmp_array = $_smarty_tpl->getValue('CONFIGS') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['tooltip_length'] = 150;
$_smarty_tpl->assign('CONFIGS', $_tmp_array, false, NULL);
}?>

<div id="hot-news">
    <div class="panel panel-default news_column">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-14 margin-bottom-lg">
                    <div class="margin-bottom text-center"><a href="<?php echo $_smarty_tpl->getValue('MAIN_ROW')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('MAIN_ROW')['title'];?>
"<?php if ($_smarty_tpl->getValue('MAIN_ROW')['external_link']) {?> target="_blank"<?php }?>><img src="<?php echo $_smarty_tpl->getValue('MAIN_ROW')['imgsource'];?>
" alt="<?php echo $_smarty_tpl->getValue('MAIN_ROW')['title'];?>
" width="<?php echo $_smarty_tpl->getValue('MAIN_ROW')['width'];?>
" class="img-thumbnail"/></a></div>
                    <div class="h2 margin-bottom-sm"><a href="<?php echo $_smarty_tpl->getValue('MAIN_ROW')['link'];?>
" title="<?php echo $_smarty_tpl->getValue('MAIN_ROW')['title'];?>
"<?php if ($_smarty_tpl->getValue('MAIN_ROW')['external_link']) {?> target="_blank"<?php }?>><strong><?php if ($_smarty_tpl->getValue('CONFIGS')['length_othertitle'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('MAIN_ROW')['title'],$_smarty_tpl->getValue('CONFIGS')['length_othertitle'],"...");
} else {
echo $_smarty_tpl->getValue('MAIN_ROW')['title'];
}?></strong></a></div>
                    <?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('MAIN_ROW')['hometext']);?>

                    <p class="text-right"><a href="<?php echo $_smarty_tpl->getValue('MAIN_ROW')['link'];?>
"><em class="fa fa-sign-out"></em><?php echo $_smarty_tpl->getValue('LANG')->getModule('more');?>
</a></p>
                </div>
                <div class="hot-news-others col-md-10 margin-bottom-lg">
<?php if (!( !$_smarty_tpl->hasVariable('OTHER_ROWS') || empty($_smarty_tpl->getValue('OTHER_ROWS')))) {?>
                    <ul class="column-margin-left list-none">
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('OTHER_ROWS'), 'other_row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('other_row')->value) {
$foreach0DoElse = false;
?>
                        <li class="icon_list">
                            <a class="show black h4 clearfix" href="<?php echo $_smarty_tpl->getValue('other_row')['link'];?>
"<?php if ($_smarty_tpl->getValue('other_row')['external_link']) {?> target="_blank"<?php }
if ($_smarty_tpl->getValue('CONFIGS')['showtooltip']) {?> data-placement="<?php echo (($tmp = $_smarty_tpl->getValue('CONFIGS')['tooltip_position'] ?? null)===null||$tmp==='' ? "bottom" ?? null : $tmp);?>
" data-content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('other_row')['hometext'],$_smarty_tpl->getValue('CONFIGS')['tooltip_length'],"...");?>
" data-img="<?php echo $_smarty_tpl->getValue('other_row')['imgsource'];?>
" data-rel="tooltip"<?php } else { ?> title="<?php echo $_smarty_tpl->getValue('other_row')['title'];?>
"<?php }?>><img src="<?php echo $_smarty_tpl->getValue('other_row')['imgsource'];?>
" alt="<?php echo $_smarty_tpl->getValue('other_row')['title'];?>
" class="img-thumbnail pull-right margin-left-sm" style="width:65px;"/><span><?php if ($_smarty_tpl->getValue('CONFIGS')['length_othertitle'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('other_row')['title'],$_smarty_tpl->getValue('CONFIGS')['length_othertitle'],"...");
} else {
echo $_smarty_tpl->getValue('other_row')['title'];
}?></span></a>
                        </li>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
<?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
