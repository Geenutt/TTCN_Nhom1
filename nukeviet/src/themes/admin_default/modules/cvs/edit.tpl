<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG.edit}: {ROW.title}</h3>
    </div>
    <div class="panel-body">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="{NV_LANG_VARIABLE}" value="{NV_LANG_DATA}" />
            <input type="hidden" name="{NV_NAME_VARIABLE}" value="{MODULE_NAME}" />
            <input type="hidden" name="{NV_OP_VARIABLE}" value="edit" />
            <input type="hidden" name="id" value="{ROW.id}" />
            
            <!-- BEGIN: error -->
            <div class="alert alert-danger">
                {ERROR}
            </div>
            <!-- END: error -->

            <div class="row">
                <div class="col-xs-24 col-md-12">
                    <div class="form-group">
                        <label class="control-label"><strong>{LANG.title}</strong></label>
                        <input class="form-control" type="text" name="title" value="{ROW.title}" required="required" oninvalid="this.setCustomValidity(nv_required[0])" oninput="this.setCustomValidity('')" />
                    </div>
                </div>
                <div class="col-xs-24 col-md-12">
                    <div class="form-group">
                        <label class="control-label"><strong>{LANG.file_cv}</strong></label>
                        <div class="form-control-static">
                            <a href="{NV_BASE_SITEURL}{NV_UPLOADS_DIR}/{MODULE_UPLOAD}/{ROW.link}" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i> {LANG.view_current}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-24 col-md-12">
                    <div class="form-group">
                        <label class="control-label"><strong>{LANG.file_cv}</strong></label>
                        <input class="form-control" type="file" name="file_cv" accept=".pdf" />
                        <span class="help-block">{LANG.file_size_limit}</span>
                        <span class="help-block">{LANG.file_type_required}</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-24">
                    <div class="form-group">
                        <div class="text-center">
                            <input class="btn btn-primary" type="submit" name="submit" value="{LANG.save}" />
                            <a class="btn btn-default" href="{BACK}">
                                <i class="fa fa-arrow-left"></i> {LANG.back}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
.panel {
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    border: none;
}
.panel-heading {
    background-color: #f8f9fa !important;
    border-bottom: 1px solid #eee;
}
.panel-title {
    color: #333;
    font-weight: 600;
}
.form-group {
    margin-bottom: 20px;
}
.control-label {
    color: #666;
    font-weight: 500;
    margin-bottom: 5px;
}
.form-control {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 8px 12px;
    font-size: 14px;
}
.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
}
.help-block {
    color: #666;
    font-size: 12px;
    margin-top: 5px;
}
.btn {
    padding: 6px 12px;
    font-size: 13px;
    margin: 0 5px;
}
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
.btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
}
.btn-default {
    background-color: #f8f9fa;
    border-color: #ddd;
}
.btn-default:hover {
    background-color: #e2e6ea;
    border-color: #dae0e5;
}
.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}
.btn-info:hover {
    background-color: #138496;
    border-color: #117a8b;
}
.fa {
    margin-right: 5px;
}
.red {
    color: #dc3545;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
</style>
<!-- END: main --> 