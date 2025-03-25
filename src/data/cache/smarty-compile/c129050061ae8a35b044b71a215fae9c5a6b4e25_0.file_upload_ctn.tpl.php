<?php
/* Smarty version 5.4.3, created on 2025-03-25 00:27:54
  from 'file:upload_ctn.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e1961acbbe84_58623716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c129050061ae8a35b044b71a215fae9c5a6b4e25' => 
    array (
      0 => 'upload_ctn.tpl',
      1 => 1741537361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e1961acbbe84_58623716 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\nukeviet\\src\\themes\\admin_future\\modules\\upload';
?><div class="fms-wraper">
    <div class="fms-ctn">
        <div class="fms-tree" data-toggle="trees">
            <div class="fms-tree-scroller" data-toggle="tree-scroller"></div>
        </div>
        <div class="fms-section">
            <div class="fms-contents">
                <div class="fms-actions-bar d-flex gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <button type="button" class="btn btn-sm btn-primary btn-toggle-tree" data-toggle="toggle-trees" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('toggle_folders');?>
"><i class="fa-solid fa-folder-tree pe-none"></i></button>
                        <div data-toggle="filter-type" data-type="file" class="filter-desktop dropdown" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('selectfiletype');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('selectfiletype');?>
">
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-type="file"><?php echo $_smarty_tpl->getValue('LANG')->getModule('type_file');?>
</a></li>
                                <li><a class="dropdown-item" href="#" data-type="image"><?php echo $_smarty_tpl->getValue('LANG')->getModule('type_image');?>
</a></li>
                            </ul>
                        </div>
                        <div data-toggle="filter-author" data-author="0" class="filter-desktop dropdown" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('author');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('author');?>
">
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('author0');?>

                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-author="0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('author0');?>
</a></li>
                                <li><a class="dropdown-item" href="#" data-author="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('author1');?>
</a></li>
                            </ul>
                        </div>
                        <div data-toggle="filter-order" data-order="0" class="filter-desktop dropdown" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('order_type');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('order_type');?>
">
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_smarty_tpl->getValue('LANG')->getModule('order0');?>

                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-order="0"><?php echo $_smarty_tpl->getValue('LANG')->getModule('order0');?>
</a></li>
                                <li><a class="dropdown-item" href="#" data-order="1"><?php echo $_smarty_tpl->getValue('LANG')->getModule('order1');?>
</a></li>
                                <li><a class="dropdown-item" href="#" data-order="2"><?php echo $_smarty_tpl->getValue('LANG')->getModule('order2');?>
</a></li>
                            </ul>
                        </div>
                        <a class="p-1 filter-mobile" href="#" data-toggle="filter-extra" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('filter_title');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('filter_title');?>
">
                            <i class="fa-solid fa-filter fa-lg fa-fw"></i>
                        </a>
                        <a class="p-1" href="#" data-toggle="filter-q" data-q="" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('search_by_key');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('search_by_key');?>
" data-label-clear="<?php echo $_smarty_tpl->getValue('LANG')->getModule('search_clear_key');?>
" data-label-search="<?php echo $_smarty_tpl->getValue('LANG')->getModule('search_by_key');?>
">
                            <i class="fa-solid fa-magnifying-glass fa-lg fa-fw" data-icon-clear="fa-ban text-danger" data-icon-search="fa-magnifying-glass"></i>
                        </a>
                    </div>
                    <div class="ms-auto d-flex align-items-center">
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-none p-1" data-toggle="upload-notallowed">
                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('notupload');?>
" title="<?php echo $_smarty_tpl->getValue('LANG')->getModule('notupload');?>
" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('notupload');?>
"><i class="fa-solid fa-triangle-exclamation text-danger"></i></span>
                            </div>
                            <div class="d-none btn-group" data-toggle="upload-group">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="upload-local-btn"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_mode_local');?>
</button>
                                <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_mode');?>
</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" data-toggle="upload-remote-btn"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_mode_remote');?>
</a></li>
                                </ul>
                            </div>
                            <a class="p-1" href="#" data-toggle="list-grid" data-icon-list="fa-list-ul" data-icon-grid="fa-border-all" data-view="grid" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_view_detail');?>
" data-label-list="<?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_view_thumbnail');?>
" data-label-grid="<?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_view_detail');?>
">
                                <i class="fa-solid fa-border-all fa-lg fa-fw"></i>
                            </a>
                            <a class="p-1" href="#" data-toggle="refresh" aria-label="">
                                <i class="fa-solid fa-arrows-rotate fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fms-files-ctn">
                    <div class="fms-files view-grid" data-toggle="file-scroller"></div>
                </div>
                <div class="fms-files-page">
                    <div class="pagination-wrap" data-toggle="pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fms-upqueue-outer d-none" data-toggle="queue-ctns">
        <div class="fms-upqueue">
            <div class="queue-tools d-flex gap-2 align-items-center">
                <div class="tool-btns">
                    <button data-toggle="queue-add" type="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_add_files');?>
</button>
                    <button data-toggle="queue-start" type="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-play"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_mode_local');?>
</button>
                    <button data-toggle="queue-cancel" type="button" class="btn btn-sm btn-secondary"><i class="fa-solid fa-xmark text-danger"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_cancel');?>
</button>
                    <button data-toggle="queue-stop" type="button" class="btn btn-sm btn-secondary d-none"><i class="fa-solid fa-pause"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_stop');?>
</button>
                    <button data-toggle="queue-continue" type="button" class="btn btn-sm btn-secondary d-none"><i class="fa-solid fa-play"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_continue');?>
</button>
                    <button data-toggle="queue-finishloader" type="button" class="btn btn-sm btn-success d-none"><i class="fa-solid fa-spinner fa-spin-pulse"></i></button>
                    <button data-toggle="queue-finish" type="button" class="btn btn-sm btn-secondary d-none"><i class="fa-solid fa-check"></i> <?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_finish');?>
</button>
                </div>
                <div class="tool-sizes" data-toggle="queue-size">0</div>
                <div class="tool-progress">
                    <div data-toggle="queue-progress-bar" class="progress" role="progressbar" aria-label="<?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_progressbar');?>
" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div data-toggle="queue-progress-value" class="progress-bar"></div>
                    </div>
                </div>
            </div>
            <div class="queue-opts<?php if (( !$_smarty_tpl->hasVariable('UPLOAD_LOGO') || empty($_smarty_tpl->getValue('UPLOAD_LOGO')))) {?> d-none<?php }?>">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="queue_autologo" id="[prefix]-queue-autologo">
                    <label class="form-check-label text-truncate" for="[prefix]-queue-autologo"><?php echo $_smarty_tpl->getValue('LANG')->getModule('autologo_for_upload');?>
</label>
                </div>
            </div>
            <div class="queue-head">
                <div class="queue-col-name"><?php echo $_smarty_tpl->getValue('LANG')->getModule('file_name');?>
</div>
                <div class="queue-col-alt"><?php echo $_smarty_tpl->getValue('LANG')->getModule('altimage');?>
</div>
                <div class="queue-col-size"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_size');?>
</div>
                <div class="queue-col-status"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_status');?>
</div>
                <div class="queue-col-tool"></div>
            </div>
            <div class="queue-files" data-toggle="queue-scroller">
                <div class="queue-files-items" data-toggle="queue-items"></div>
            </div>
        </div>
    </div>
    <div class="dropzone-area" data-toggle="dropzone">
        <div class="text-center pe-none">
            <div class="mb-1 pe-none">
                <i class="fa-solid fa-cloud-arrow-up pe-none"></i>
            </div>
            <div class="fs-5 fw-medium pe-none"><?php echo $_smarty_tpl->getValue('LANG')->getModule('upload_drop');?>
</div>
        </div>
    </div>
    <div class="fms-iframe"><iframe data-toggle="fms-iframe"></iframe></div>
    <div class="fms-loader show" data-toggle="loader">
        <i class="fa-solid fa-spinner fa-spin-pulse fa-3x"></i>
    </div>
</div>
<?php }
}
