<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-24 col-md-12">
                <div class="form-group">
                    <label class="control-label"><strong>{LANG.title}</strong></label>
                    <div class="form-control-static">{ROW.title}</div>
                </div>
            </div>
            <div class="col-xs-24 col-md-12">
                <div class="form-group">
                    <label class="control-label"><strong>{LANG.file_cv}</strong></label>
                    <div class="form-control-static">
                        <a href="{ROW.file_url}" target="_blank" class="btn btn-primary btn-sm">
                            <i class="fa fa-eye"></i> {LANG.download}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24 col-md-12">
                <div class="form-group">
                    <label class="control-label"><strong>{LANG.created_at}</strong></label>
                    <div class="form-control-static">
                        <i class="fa fa-calendar"></i> {ROW.created_at}
                    </div>
                </div>
            </div>
            <div class="col-xs-24 col-md-12">
                <div class="form-group">
                    <label class="control-label"><strong>{LANG.updated_at}</strong></label>
                    <div class="form-control-static">
                        <i class="fa fa-clock-o"></i> {ROW.updated_at}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24">
                <div class="form-group">
                    <div class="text-center">
                        <a class="btn btn-default" href="{BACK}">
                            <i class="fa fa-arrow-left"></i> {LANG.back}
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
.form-control-static {
    color: #333;
    font-size: 14px;
    padding: 7px 0;
}
.btn {
    padding: 6px 12px;
    font-size: 13px;
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
.fa {
    margin-right: 5px;
}
</style>
<!-- END: main -->
