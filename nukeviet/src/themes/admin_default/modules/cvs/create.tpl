<!-- BEGIN: main -->
<div class="well">
    <form action="{NV_BASE_ADMINURL}index.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="{NV_LANG_VARIABLE}" value="{NV_LANG_DATA}" />
        <input type="hidden" name="{NV_NAME_VARIABLE}" value="{MODULE_NAME}" />
        <input type="hidden" name="{NV_OP_VARIABLE}" value="{OP}" />
        <input type="hidden" name="id" value="{ROW.id}" />
        <div class="row">
            <div class="col-xs-24 col-md-6">
                <div class="form-group">
                    <label class="control-label"><strong>{LANG.title}</strong> <span class="red">(*)</span></label>
                    <input class="form-control" type="text" name="title" value="{ROW.title}" required="required" oninvalid="this.setCustomValidity(nv_required[0])" oninput="this.setCustomValidity('')" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24 col-md-6">
                <div class="form-group">
                    <label class="control-label"><strong>{LANG.file_cv}</strong> <span class="red">(*)</span></label>
                    <input class="form-control" type="file" name="file_cv" accept=".pdf" required="required" oninvalid="this.setCustomValidity(nv_required[0])" oninput="this.setCustomValidity('')" />
                    <span class="help-block">{LANG.file_size_limit}</span>
                    <span class="help-block">{LANG.file_type_required}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24 col-md-6">
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="{LANG.save}" />
                    <a class="btn btn-default" href="{BACK}">{LANG.cancel}</a>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END: main -->