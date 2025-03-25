<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title" style="float:left"><i class="fa fa-pencil"></i> {PAGE_TITLE}</h3>
        <div style="clear:both"></div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="{FORM_ACTION}" method="post">
            <div class="row">
                <div class="col-sm-24 col-md-18">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><strong>{LANG.title}</strong> <span class="red">*</span></label>
                                <div class="col-sm-20">
                                    <input type="text" class="form-control" name="title" value="{ROW.title}" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label"><strong>{LANG.description}</strong></label>
                                <div class="col-sm-20">
                                    <textarea class="form-control" name="description" rows="3">{ROW.description}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label"><strong>{LANG.content}</strong> <span class="red">*</span></label>
                                <div class="col-sm-20">
                                    {ROW.content}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-24 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>{LANG.info}</strong>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-8 control-label"><strong>{LANG.status}</strong></label>
                                <div class="col-sm-16">
                                    <select class="form-control" name="status">
                                        <option value="1"{ROW.status == 1 ? ' selected="selected"' : ''}>{LANG.status_1}</option>
                                        <option value="0"{ROW.status == 0 ? ' selected="selected"' : ''}>{LANG.status_0}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-8 control-label"><strong>{LANG.image}</strong></label>
                                <div class="col-sm-16">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="image" id="image" value="{ROW.image}"/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" onclick="nv_open_browse( '{NV_BASE_ADMINURL}index.php?{NV_NAME_VARIABLE}=upload&popup=1&area=image&path={UPLOADS_DIR_USER}&type=image&currentpath={UPLOADS_DIR_USER}', 'NVImg', 850, 420, 'resizable=no,scrollbars=no,toolbar=no,location=no,status=no' );">
                                                <em class="fa fa-folder-open-o fa-fix">&nbsp;</em>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-8 control-label"></label>
                                <div class="col-sm-16">
                                    <div id="image-preview">
                                        <!-- BEGIN: image -->
                                        <img src="{ROW.image}" class="img-thumbnail" style="height:100px; object-fit:contain;">
                                        <!-- END: image -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <input type="hidden" name="save" value="1" />
                <input type="submit" value="{LANG.save}" class="btn btn-primary" />
            </div>
            <!-- BEGIN: error -->
            <div class="alert alert-danger">{ERROR}</div>
            <!-- END: error -->
        </form>
    </div>
</div>
<!-- END: main -->

<!-- BEGIN: script -->
<script type="text/javascript">
$(document).ready(function() {
    // Xử lý preview ảnh khi thay đổi
    $('#image').on('change', function() {
        var imageUrl = $(this).val();
        var previewHtml = '';
        
        if (imageUrl) {
            previewHtml = '<img src="' + imageUrl + '" class="img-thumbnail" style="height:100px; object-fit:contain;">';
        }
        
        $('#image-preview').html(previewHtml);
    });
});
</script>
<!-- END: script --> 