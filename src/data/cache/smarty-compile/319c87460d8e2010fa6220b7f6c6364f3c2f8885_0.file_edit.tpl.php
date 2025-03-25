<?php
/* Smarty version 5.4.3, created on 2025-03-24 22:36:41
  from 'file:edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e17c09e0bf57_52442682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319c87460d8e2010fa6220b7f6c6364f3c2f8885' => 
    array (
      0 => 'edit.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e17c09e0bf57_52442682 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\modules';
echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/select2/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo (defined('ASSETS_STATIC_URL') ? constant('ASSETS_STATIC_URL') : null);?>
/js/select2/i18n/<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
.js"><?php echo '</script'; ?>
>
<div class="card border-primary border-3 border-bottom-0 border-start-0 border-end-0">
    <div class="card-body pt-4">
        <form method="post" class="ajax-submit" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo (defined('NV_LANG_DATA') ? constant('NV_LANG_DATA') : null);?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('MODULE_NAME');?>
&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('OP');?>
&amp;mod=<?php echo $_smarty_tpl->getValue('DATA')['title'];?>
" novalidate>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-9">
                    <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('required');?>

                </div>
            </div>
            <div class="row mb-3">
                <label for="element_mod_name" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('module_name');?>
 <span class="text-danger">(*)</span></label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <input type="text" class="form-control-plaintext" id="element_mod_name" name="mod_name" value="<?php echo $_smarty_tpl->getValue('DATA')['title'];?>
" maxlength="55" readonly="readonly">
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_custom_title" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('custom_title');?>
 <span class="text-danger">(*)</span></label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <input type="text" class="form-control" id="element_custom_title" name="custom_title" value="<?php echo $_smarty_tpl->getValue('DATA')['custom_title'];?>
" maxlength="100">
                    <div class="invalid-feedback"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('required_invalid');?>
</div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_admin_title" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('admin_title');?>
</label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <input type="text" class="form-control" id="element_admin_title" name="admin_title" value="<?php echo $_smarty_tpl->getValue('DATA')['admin_title'];?>
" maxlength="100">
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_theme" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('theme');?>
</label>
                <div class="col-sm-4 col-lg-6 col-xxl-5">
                    <select class="form-select" id="element_theme" name="theme">
                        <option value=""><?php echo $_smarty_tpl->getValue('LANG')->getModule('theme_default');?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('THEME_LIST'), 'theme');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('theme');?>
"<?php if ($_smarty_tpl->getValue('theme') == $_smarty_tpl->getValue('DATA')['theme']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('theme');?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_mobile" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('mobile');?>
</label>
                <div class="col-sm-4 col-lg-6 col-xxl-5">
                    <select class="form-select" id="element_mobile" name="mobile">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('DTHEME_MOBILE'), 'theme');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('theme')['key'];?>
"<?php if ($_smarty_tpl->getValue('theme')['key'] == $_smarty_tpl->getValue('DATA')['mobile']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('theme')['title'];?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('THEME_MOBILE'), 'theme');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme')->value) {
$foreach2DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('theme');?>
"<?php if ($_smarty_tpl->getValue('theme') == $_smarty_tpl->getValue('DATA')['mobile']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('theme');?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_site_title" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('site_title');?>
</label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <input type="text" class="form-control" id="element_site_title" name="site_title" value="<?php echo $_smarty_tpl->getValue('DATA')['site_title'];?>
" maxlength="255">
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_description" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('description');?>
</label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <input type="text" class="form-control" id="element_description" name="description" value="<?php echo $_smarty_tpl->getValue('DATA')['description'];?>
" maxlength="255">
                </div>
            </div>
            <div class="row mb-3">
                <label for="element_keywords" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('keywords');?>
</label>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <input type="text" class="form-control" id="element_keywords" name="keywords" value="<?php echo $_smarty_tpl->getValue('DATA')['keywords'];?>
" maxlength="255" aria-describedby="element_keywords_helper">
                    <div id="element_keywords_helper" class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('keywords_info');?>
</div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-8 col-lg-6 col-xxl-5 offset-sm-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="act" value="1"<?php if ($_smarty_tpl->getValue('DATA')['act']) {?> checked<?php }?> role="switch" id="element_act">
                        <label class="form-check-label" for="element_act"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('activate');?>
</label>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->getValue('FEATURE_RSS')) {?>
            <div class="row mb-3">
                <div class="col-sm-8 col-lg-6 col-xxl-5 offset-sm-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="rss" value="1"<?php if ($_smarty_tpl->getValue('DATA')['rss']) {?> checked<?php }?> role="switch" id="element_rss">
                        <label class="form-check-label" for="element_rss"><?php echo $_smarty_tpl->getValue('LANG')->getModule('activate_rss');?>
</label>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('FEATURE_SITEMAP')) {?>
            <div class="row mb-3">
                <div class="col-sm-8 col-lg-6 col-xxl-5 offset-sm-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="sitemap" value="1"<?php if ($_smarty_tpl->getValue('DATA')['sitemap']) {?> checked<?php }?> role="switch" id="element_sitemap">
                        <label class="form-check-label" for="element_sitemap"><?php echo $_smarty_tpl->getValue('LANG')->getModule('activate_sitemap');?>
</label>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('DATA')['title'] != $_smarty_tpl->getValue('GCONFIG')['site_home_module']) {?>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('groups_view');?>
</div>
                <div class="col-sm-8 col-lg-6 col-xxl-5">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('GROUPS_LIST'), 'group_name', false, 'group_id');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_id')->value => $_smarty_tpl->getVariable('group_name')->value) {
$foreach3DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('group_id') > 2) {?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="groups_view[]" value="<?php echo $_smarty_tpl->getValue('group_id');?>
" id="element_groups_view_<?php echo $_smarty_tpl->getValue('group_id');?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('group_id'),$_smarty_tpl->getValue('DATA')['groups_view'])) {?> checked<?php }?>>
                        <label class="form-check-label" for="element_groups_view_<?php echo $_smarty_tpl->getValue('group_id');?>
">
                            <?php echo $_smarty_tpl->getValue('group_name');?>

                        </label>
                    </div>
                    <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <div class="form-text"><?php echo $_smarty_tpl->getValue('LANG')->getModule('module_groups_view_note');?>
</div>
                </div>
            </div>
            <?php }?>
            <div class="row mb-3">
                <label for="element_icon" class="col-sm-3 col-form-label text-sm-end"><?php echo $_smarty_tpl->getValue('LANG')->getModule('icon');?>
</label>
                <div class="col-sm-4 col-lg-6 col-xxl-5">
                    <select class="form-select select2-fontawesome" id="element_icon" name="icon" data-placeholder="<?php echo $_smarty_tpl->getValue('LANG')->getModule('icon_placeholder');?>
">
                        <?php if (!( !true || empty($_smarty_tpl->getValue('DATA')['icon']))) {?>
                        <option value="<?php echo $_smarty_tpl->getValue('DATA')['icon'];?>
"><?php echo $_smarty_tpl->getValue('ICON_PACKS')[$_smarty_tpl->getValue('DATA')['icon']] ?? $_smarty_tpl->getValue('DATA')['icon'];?>
</option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-lg-6 col-xxl-5 offset-sm-3">
                    <input type="hidden" name="checkss" value="<?php echo $_smarty_tpl->getValue('CHECKSS');?>
">
                    <input name="module_theme" type="hidden" value="<?php echo $_smarty_tpl->getValue('DATA')['module_theme'];?>
">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('submit');?>
</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }
}
