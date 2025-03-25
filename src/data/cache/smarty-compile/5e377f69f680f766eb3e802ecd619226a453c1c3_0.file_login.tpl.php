<?php
/* Smarty version 5.4.3, created on 2025-03-10 00:08:00
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67cdcaf04f3218_61871034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e377f69f680f766eb3e802ecd619226a453c1c3' => 
    array (
      0 => 'login.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67cdcaf04f3218_61871034 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\system';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="login-page bg-body-tertiary">
    <div class="d-flex flex-column min-vh-100">
        <div class="flex-shrink-1 flex-grow-1 d-flex justify-content-center align-items-center">
            <div>
                <div class="card card-login">
                    <div class="login-header card-header text-center fw-medium fs-4 text-bg-primary border-bottom-0">
                        <?php if (( !$_smarty_tpl->hasVariable('PRE_DATA') || empty($_smarty_tpl->getValue('PRE_DATA')))) {?>
                        <i class="fa-solid fa-right-to-bracket"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('adminlogin');?>

                        <?php } else { ?>
                        <i class="fa-solid fa-unlock-keyhole"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('2teplogin');?>

                        <?php }?>
                    </div>
                    <div class="card-body">
                        <div class="login-box">
                            <?php if (( !$_smarty_tpl->hasVariable('PRE_DATA') || empty($_smarty_tpl->getValue('PRE_DATA')))) {?>
                                                        <form method="post" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php" data-toggle="preForm" data-passkey-allowed="<?php echo $_smarty_tpl->getValue('PASSKEY_ALLOWED') ? 1 : 0;?>
">
                                <div class="mb-3 border-3 border-start ps-2" data-toggle="message"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('adminlogininfo');?>
</div>
                                <div data-toggle="form">
                                    <div class="mb-3">
                                        <label for="nv_login" class="form-label text-dark fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('login_name');?>
</label>
                                        <input class="form-control" name="nv_login" type="text" id="nv_login" value="<?php echo $_smarty_tpl->getValue('V_LOGIN');?>
" data-error-mess="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('username_empty');?>
" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex gap-2">
                                            <label for="nv_password" class="form-label text-dark fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('password');?>
</label>
                                            <div class="ms-auto">
                                                <a title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('lostpass');?>
" href="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
index.php?<?php echo (defined('NV_LANG_VARIABLE') ? constant('NV_LANG_VARIABLE') : null);?>
=<?php echo $_smarty_tpl->getValue('GCONFIG')['site_lang'];?>
&amp;<?php echo (defined('NV_NAME_VARIABLE') ? constant('NV_NAME_VARIABLE') : null);?>
=users&amp;<?php echo (defined('NV_OP_VARIABLE') ? constant('NV_OP_VARIABLE') : null);?>
=lostpass" tabindex="-1"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('lostpass');?>
?</a>
                                            </div>
                                        </div>
                                        <input class="form-control" name="nv_password" type="password" id="nv_password" value="<?php echo $_smarty_tpl->getValue('V_PASSWORD');?>
" data-error-mess="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('password_empty');?>
" autocomplete="off">
                                    </div>
                                    <?php if ($_smarty_tpl->getValue('GFX_CHK')) {?>
                                    <?php if ($_smarty_tpl->getValue('CAPTCHA_TYPE') == 'captcha') {?>
                                    <div class="mb-3">
                                        <label for="seccode" class="form-label text-dark fw-medium"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('securitycode1');?>
</label>
                                        <div class="d-flex gap-2 align-items-center">
                                            <input name="nv_seccode" type="text" id="seccode" maxlength="<?php echo (defined('NV_GFX_NUM') ? constant('NV_GFX_NUM') : null);?>
" class="form-control captcha" data-error-mess="<?php echo $_smarty_tpl->getValue('LOGIN_ERROR_SECURITY');?>
" autocomplete="off">
                                            <img id="vimg" class="captcha-img" alt="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('securitycode1');?>
" src="<?php echo (defined('SRC_CAPTCHA') ? constant('SRC_CAPTCHA') : null);?>
">
                                            <a href="#" data-toggle="nv_change_captcha" title="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('refresh');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('refresh');?>
"><i class="fa-solid fa-rotate fa-lg"></i></a>
                                        </div>
                                    </div>
                                    <?php } elseif ($_smarty_tpl->getValue('CAPTCHA_TYPE') == 'recaptcha') {?>
                                    <?php if ($_smarty_tpl->getValue('GCONFIG')['recaptcha_ver'] == 2) {?>
                                    <div class="mb-3">
                                        <div id="reCaptcha" class="recaptcha-holder"></div>
                                        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?hl=<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
&amp;onload=onloadCallback&amp;render=explicit"><?php echo '</script'; ?>
>
                                        <?php echo '<script'; ?>
 type="text/javascript">
                                        var reCaptcha2,
                                            onloadCallback = function() {
                                            $('[type=submit]').prop('disabled', true);
                                            reCaptcha2 = grecaptcha.render('reCaptcha', {
                                                'sitekey': '<?php echo $_smarty_tpl->getValue('GCONFIG')['recaptcha_sitekey'];?>
',
                                                'type': '<?php echo $_smarty_tpl->getValue('GCONFIG')['recaptcha_type'];?>
',
                                                'callback': function(res) {
                                                    $('[type=submit]').prop('disabled', false);
                                                },
                                                'expired-callback': function() {
                                                    $('[type=submit]').prop('disabled', true);
                                                },
                                                'error-callback': function() {
                                                    $('[type=submit]').prop('disabled', true);
                                                }
                                            });
                                        };
                                        <?php echo '</script'; ?>
>
                                    </div>
                                    <?php } elseif ($_smarty_tpl->getValue('GCONFIG')['recaptcha_ver'] == 3) {?>
                                    <input type="hidden" name="g-recaptcha-response" value="">
                                    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?hl=<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
&amp;render=<?php echo $_smarty_tpl->getValue('GCONFIG')['recaptcha_sitekey'];?>
"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
>
                                        var sitekey = '<?php echo $_smarty_tpl->getValue('GCONFIG')['recaptcha_sitekey'];?>
';
                                        grecaptcha.ready(() => {
                                            window.recaptcha3Ready = true;
                                            document.dispatchEvent(new Event('nv.recaptcha3.ready'));
                                        });
                                    <?php echo '</script'; ?>
>
                                    <?php }?>
                                    <?php } elseif ($_smarty_tpl->getValue('CAPTCHA_TYPE') == 'turnstile') {?>
                                    <?php echo '<script'; ?>
 src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit"><?php echo '</script'; ?>
>
                                    <div class="mb-3">
                                        <div id="cf-turnstile" class="cf-turnstile"></div>
                                    </div>
                                    <?php echo '<script'; ?>
>
                                    turnstile.ready(function () {
                                        $('[type=submit]').prop('disabled', true);
                                        turnstile.render("#cf-turnstile", {
                                            'sitekey': "<?php echo $_smarty_tpl->getValue('GCONFIG')['turnstile_sitekey'];?>
",
                                            'callback': function(res) {
                                                $('[type=submit]').prop('disabled', false);
                                            },
                                            'expired-callback': function() {
                                                $('[type=submit]').prop('disabled', true);
                                            },
                                            'error-callback': function() {
                                                $('[type=submit]').prop('disabled', true);
                                            },
                                            'language': "<?php echo (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null);?>
"
                                        });
                                    });
                                    <?php echo '</script'; ?>
>                                    
                                    <?php }?>
                                    <?php }?>
                                    <div class="d-grid">
                                        <input class="btn btn-primary" type="submit" value="<?php echo $_smarty_tpl->getValue('LANG')->getGlobal('loginsubmit');?>
">
                                    </div>
                                    <div class="d-none" data-toggle="passkey-btn">
                                        <div class="d-flex align-items-center my-2">
                                            <div class="flex-grow-1 border-top"></div>
                                            <span class="mx-3"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('or');?>
</span>
                                            <div class="flex-grow-1 border-top"></div>
                                        </div>
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-secondary"><i class="fa-solid fa-user-shield" data-icon="fa-user-shield"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('passkey_login');?>
</button>
                                        </div>
                                        <div class="text-danger mt-2 d-none" data-toggle="passkey-error"></div>
                                    </div>
                                    <div class="mt-2 text-center d-none" data-toggle="passkey-link">
                                        <a href="#"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('passkey_login');?>
</a>
                                    </div>
                                </div>
                                <input type="hidden" name="checkss" value="<?php echo (defined('NV_CHECK_SESSION') ? constant('NV_CHECK_SESSION') : null);?>
">
                                <?php if ($_smarty_tpl->getValue('SV')->getOriginalProtocol() != 'https') {?>
                                <div class="mt-3">
                                    <small><strong class="text-danger"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('warning_ssl');?>
:</strong> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('content_ssl');?>
</small>
                                </div>
                                <?php }?>
                            </form>
                            <?php } else { ?>
                                                        <form method="post" action="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php" data-toggle="step2Form" data-passkey-allowed="<?php echo $_smarty_tpl->getValue('PASSKEY_ALLOWED') ? 1 : 0;?>
">
                                <?php if (( !$_smarty_tpl->hasVariable('ERROR') || empty($_smarty_tpl->getValue('ERROR')))) {?>
                                <div class="mb-3 border-3 border-start ps-2" data-toggle="message"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('admin_hello_2step',$_smarty_tpl->getValue('PRE_DATA')['full_name']);?>
.</div>
                                <?php } else { ?>
                                <div class="<?php if (!( !true || empty($_smarty_tpl->getValue('CFG_2STEP')['opts']))) {?>mb-3 <?php }?>border-3 border-start ps-2 border-danger text-danger" data-toggle="message"><?php echo $_smarty_tpl->getValue('ERROR');?>
.</div>
                                <?php }?>
                                <div data-toggle="form">
                                    <?php if (!( !true || empty($_smarty_tpl->getValue('CFG_2STEP')['opts']))) {?>
                                    <?php if ($_smarty_tpl->getValue('CFG_2STEP')['count_active'] < 1) {?>
                                    <p class="text-danger"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('admin_mactive_2step');?>
. <?php echo $_smarty_tpl->getValue('LANG')->getGlobal($_smarty_tpl->getValue('CFG_2STEP')['count_opts'] > 1 ? 'admin_mactive_2step_choose1' : 'admin_mactive_2step_choose0');?>
:</p>
                                    <div class="d-grid gap-2 mb-3">
                                        <?php $_smarty_tpl->assign('isRegularMethod', 0, true, NULL);?>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('CFG_2STEP')['opts'], 'opt');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('opt')->value) {
$foreach0DoElse = false;
?>
                                        <?php if (($_smarty_tpl->getValue('opt') == 'code' || $_smarty_tpl->getValue('opt') == 'key')) {?>
                                        <?php if ($_smarty_tpl->getValue('isRegularMethod') == 0) {?>
                                        <?php $_smarty_tpl->assign('isRegularMethod', ($_smarty_tpl->getValue('isRegularMethod')+1), true, NULL);?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('code',$_smarty_tpl->getValue('CFG_2STEP')['opts']) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')('key',$_smarty_tpl->getValue('CFG_2STEP')['opts'])) {?>
                                            <?php $_smarty_tpl->assign('setupTitle', $_smarty_tpl->getValue('LANG')->getGlobal('admin_setup_2fa_keycode'), true, NULL);?>
                                        <?php } else { ?>
                                            <?php ob_start();
echo $_smarty_tpl->getValue('LANG')->getGlobal("admin_2step_opt_".((string)$_smarty_tpl->getValue('opt')));
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->assign('setupTitle', $_prefixVariable1, true, NULL);?>
                                        <?php }?>
                                        <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?auth=<?php echo $_smarty_tpl->getValue('opt');?>
" class="btn btn-secondary"><?php echo $_smarty_tpl->getValue('setupTitle');?>
</a>
                                        <?php }?>
                                        <?php } else { ?>
                                        <a href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?auth=<?php echo $_smarty_tpl->getValue('opt');?>
" class="btn btn-info btn-<?php echo $_smarty_tpl->getValue('opt');?>
"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal("admin_2step_opt_".((string)$_smarty_tpl->getValue('opt')));?>
</a>
                                        <?php }?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>
                                    <?php } else { ?>
                                    <div class="d-grid gap-2 mb-3">
                                        <?php echo $_smarty_tpl->getValue('HTML_DEFAULT');?>

                                    </div>
                                    <?php if (!( !$_smarty_tpl->hasVariable('HTML_OTHER') || empty($_smarty_tpl->getValue('HTML_OTHER')))) {?>
                                    <p class="mb-2"><strong><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('admin_2step_other');?>
:</strong></p>
                                    <div class="d-grid gap-2 mb-3">
                                        <?php echo $_smarty_tpl->getValue('HTML_OTHER');?>

                                    </div>
                                    <?php }?>
                                    <?php }?>
                                    <?php }?>
                                    <div class="text-center">
                                        <a href="#" data-href="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?pre_logout=1&amp;checkss=<?php echo (defined('NV_CHECK_SESSION') ? constant('NV_CHECK_SESSION') : null);?>
" data-toggle="preLogout"><?php echo $_smarty_tpl->getValue('LANG')->getGlobal('admin_pre_logout');?>
</a>
                                    </div>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                    </div>
                    <div class="login-footer card-footer bg-body-tertiary d-flex gap-2">
                        <?php if (!( !true || empty($_smarty_tpl->getValue('GCONFIG')['lang_multi']))) {?>
                        <select id="langinterface" name="langinterface" data-toggle="changeLang" class="form-select form-select-sm w-auto mw-100">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('LANGS'), 'lmuti');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lmuti')->value) {
$foreach1DoElse = false;
?>
                            <option value="<?php echo (defined('NV_BASE_ADMINURL') ? constant('NV_BASE_ADMINURL') : null);?>
index.php?langinterface=<?php echo $_smarty_tpl->getValue('lmuti')['lang'];?>
"<?php if ($_smarty_tpl->getValue('lmuti')['lang'] == (defined('NV_LANG_INTERFACE') ? constant('NV_LANG_INTERFACE') : null)) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('lmuti')['name'];?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                        <?php }?>
                        <a id="adm-redirect" class="btn btn-secondary btn-sm d-none" href="#"><i class="fa-solid fa-star text-warning"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('acp');?>
</a>
                        <a class="btn btn-secondary btn-sm ms-auto" href="<?php echo $_smarty_tpl->getValue('GCONFIG')['site_url'];?>
"><i class="fa-solid fa-house"></i> <?php echo $_smarty_tpl->getValue('LANG')->getGlobal('go_clientsector');?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            Copyright &copy; <a href="<?php echo $_smarty_tpl->getValue('GCONFIG')['site_url'];?>
"><?php echo $_smarty_tpl->getValue('GCONFIG')['site_name'];?>
</a>. All rights reserved.
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo (defined('NV_BASE_SITEURL') ? constant('NV_BASE_SITEURL') : null);?>
themes/<?php echo $_smarty_tpl->getValue('ADMIN_THEME');?>
/js/nv.login.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
