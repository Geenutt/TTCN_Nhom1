<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-file-text"></i> {PAGE_TITLE}
            <div class="pull-right">
                <a href="{ROW.edit_url}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> {LANG.edit}</a>
                <a href="#" class="btn btn-danger btn-xs delete-btn" data-id="{ROW.id}" data-checkss="{ROW.checkss}"><i class="fa fa-trash-o"></i> {LANG.delete}</a>
            </div>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-24 col-md-18">
                <!-- Thông tin chính -->
                <div class="post-content">
                    <!-- Phần ảnh và mô tả cùng hàng -->
                    <div class="row margin-bottom">
                        <!-- Phần ảnh -->
                        <div class="col-sm-12">
                            <!-- BEGIN: image -->
                            <div class="post-image text-center">
                                <img src="{ROW.image}" alt="{ROW.title}" class="img-thumbnail" style="max-width:100%; height:100px; object-fit:contain;"/>
                            </div>
                            <!-- END: image -->
                        </div>
                        
                        <!-- Phần mô tả -->
                        <div class="col-sm-12">
                            <div class="post-description well well-sm">
                                <strong>{ROW.description}</strong>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Nội dung chi tiết -->
                    <div class="row">
                        <div class="col-sm-24">
                            <div class="post-detail">
                                {ROW.content}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-24 col-md-6">
                <!-- Thông tin phụ -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> {LANG.info}
                    </div>
                    <div class="panel-body">
                        <ul class="list-info">
                            <li>
                                <strong>{LANG.status}:</strong> 
                                <span class="label label-{ROW.status ? 'success' : 'danger'}" style="color: #000">{ROW.status_text}</span>
                            </li>
                            <li>
                                <strong>{LANG.created_at}:</strong> 
                                <span>{ROW.created_at}</span>
                            </li>
                            <li>
                                <strong>{LANG.updated_at}:</strong> 
                                <span>{ROW.updated_at}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    // Xử lý nút xóa
    $('.delete-btn').click(function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var checkss = $(this).data('checkss');
        
        if (confirm('{LANG.confirm_delete}')) {
            $.ajax({
                url: script_name + '?' + nv_lang_variable + '=' + nv_lang_data + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=delete',
                type: 'POST',
                data: {
                    'id': id,
                    'checkss': checkss
                },
                dataType: 'json',
                success: function(res) {
                    if (res.status == 'ok') {
                        alert(res.message);
                        window.location.href = res.redirect;
                    } else {
                        alert(res.message);
                    }
                }
            });
        }
    });
});
</script>
<!-- END: main -->

<style>
.list-info {
    list-style: none;
    padding: 0;
    margin: 0;
}
.list-info li {
    padding: 8px 0;
    border-bottom: 1px dashed #ddd;
}
.list-info li:last-child {
    border-bottom: none;
}
.margin-bottom {
    margin-bottom: 15px;
}
.label {
    color: #000 !important;
    font-size: 14px !important;
    padding: 5px 10px !important;
}
.post-image img {
    margin-bottom: 0;
}
.post-description {
    height: 100%;
    margin-bottom: 0;
}
</style> 