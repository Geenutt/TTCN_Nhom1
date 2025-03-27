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
                    <div class="row margin-bottom-lg">
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
                    <div class="post-detail-content">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-file-text-o"></i> {LANG.content}</h3>
                            </div>
                            <div class="panel-body">
                                {ROW.content}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-24 col-md-6">
                <!-- Thông tin phụ -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-info-circle"></i> {LANG.info}</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-info">
                            <li>
                                <label>{LANG.status}:</label>
                                <div class="pull-right">
                                    <!-- BEGIN: active -->
                                    <span class="label-active">{LANG.status_1}</span>
                                    <!-- END: active -->
                                    <!-- BEGIN: inactive -->
                                    <span class="label-inactive">{LANG.status_0}</span>
                                    <!-- END: inactive -->
                                </div>
                            </li>
                            <li>
                                <label>{LANG.created_at}:</label>
                                <div class="pull-right text-primary">
                                    <i class="fa fa-clock-o"></i> {ROW.created_at}
                                </div>
                            </li>
                            <li>
                                <label>{LANG.updated_at}:</label>
                                <div class="pull-right text-info">
                                    <i class="fa fa-clock-o"></i> {ROW.updated_at}
                                </div>
                            </li>
                            <li>
                                <label>{LANG.cv_count}:</label>
                                <div class="pull-right text-success">
                                    <i class="fa fa-file-text-o"></i> {ROW.cv_count}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- BEGIN: related_posts -->
                <div class="panel panel-info margin-top-lg">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-random"></i> {LANG.related_posts}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <!-- BEGIN: loop -->
                        <div class="related-post-item clearfix" id="related-post-{POST.id}">
                            <div class="col-xs-8 no-pd-left">
                                <a href="{POST.link}" class="related-image">
                                    <img src="{POST.image}" alt="{POST.title}" class="img-thumbnail" style="height:80px; object-fit:contain;"/>
                                </a>
                            </div>
                            <div class="col-xs-16">
                                <h4 class="post-title">
                                    <a href="{POST.link}">{POST.title}</a>
                                </h4>
                                <div class="post-description text-muted">
                                    {POST.description}
                                </div>
                            </div>
                        </div>
                        <!-- END: loop -->
                    </div>
                </div>
                <!-- END: related_posts -->
            </div>
        </div>
    </div>
</div>

<style>
.margin-bottom-lg {
    margin-bottom: 20px;
}
.list-info {
    list-style: none;
    padding: 0;
    margin: 0;
}
.list-info li {
    padding: 10px 0;
    border-bottom: 1px dashed #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.list-info li:last-child {
    border-bottom: none;
}
.list-info label {
    margin: 0;
    font-weight: 600;
}
.post-description {
    height: 100%;
    margin-bottom: 0;
    font-size: 15px;
    line-height: 1.6;
    padding: 20px;
    background-color: #f9f9f9;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.text-muted {
    font-size: 12px;
    padding: 10px;
    color:rgb(83, 72, 72);
}

.post-detail-content {
    background: #fff;
    padding: 15px;
    border-radius: 4px;
}
.panel-title {
    font-size: 14px;
    font-weight: bold;
}
.panel-title i {
    margin-right: 5px;
}
.post-detail-content .panel-body {
    padding: 15px;
    line-height: 1.6;
}

/* Style cho label trạng thái */
.label-active {
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 12px;
    font-weight: 700;
    color: #ffffff;
    background-color:rgb(38, 182, 38)
}
.label-inactive {
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 12px;
    font-weight: 700;
    color: #ffffff;
    background-color: #ff0000
}
.margin-top-lg {
    margin-top: 20px;
}
.no-pd-left {
    padding-left: 0;
}
.related-post-item {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}
.related-post-item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}
.post-title {
    margin: 0 0 5px 0;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.4;
}
.post-title a {
    color: #333;
}
.post-title a:hover {
    color: #000;
    text-decoration: none;
}
.related-image {
    display: block;
    padding: 5px;
    background: #fff;
    border-radius: 4px;
}
.related-image img {
    width: 100%;
    height: 80px !important;
    object-fit: contain;
    border: 1px solid #eee;
    border-radius: 3px;
    transition: all 0.2s ease;
}
.related-image:hover img {
    transform: scale(1.05);
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
</style>

<!-- Script xử lý xóa bài viết -->
<script type="text/javascript">
$(document).ready(function() {
    $('.delete-btn').click(function(e) {
        e.preventDefault();
        if (confirm('{LANG.confirm_delete}')) {
            var id = $(this).data('id');
            var checkss = $(this).data('checkss');
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

<!-- Modal hiển thị danh sách CV -->
<div class="modal fade" id="cvListModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-list"></i> {LANG.cv_list}</h4>
            </div>
            <div class="modal-body">
                <div id="cv-list-container">
                    <!-- Danh sách CV sẽ được thêm vào đây -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sửa lại phần script -->
<script type="text/javascript">
$(document).ready(function() {
    // Xử lý click vào số lượng CV
    $('.list-info li:last-child').click(function(e) {
        e.preventDefault();
        
        // Lấy danh sách CV
        $.ajax({
            url: script_name + '?' + nv_lang_variable + '=' + nv_lang_data + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=detail&id=' + {ROW.id},
            method: 'POST',
            data: {
                action: 'get_cv_list',
                post_id: {ROW.id},
                checkss: '{ROW.checkss}'
            },
            dataType: 'json',
            success: function(response) {
                if (response.status == 'success') {
                    var html = '<div class="list-group">';
                    if (response.data && response.data.length > 0) {
                        response.data.forEach(function(cv) {
                            html += '<div class="list-group-item">';
                            html += '<div class="row">';
                            html += '<div class="col-xs-18"><h4 class="list-group-item-heading">' + cv.title + '</h4></div>';
                            html += '<div class="col-xs-6 text-right">';
                            html += '<a href="' + cv.preview_url + '" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-eye"></i> {LANG.preview}</a>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        });
                    } else {
                        html += '<div class="alert alert-info m-bottom-none"><i class="fa fa-info-circle"></i> {LANG.no_cv_found}</div>';
                    }
                    html += '</div>';
                    $('#cv-list-container').html(html);
                    $('#cvListModal').modal('show');
                } else {
                    alert(response.message || 'Có lỗi xảy ra');
                }
            },
            error: function(xhr, status, error) {
                console.log('XHR:', xhr.responseText);
                alert('Có lỗi xảy ra khi tải dữ liệu');
            }
        });
    });
});
</script>

<style>
.list-info li:last-child {
    cursor: pointer;
}
.list-info li:last-child:hover {
    background-color: #f5f5f5;
}
.m-bottom-none {
    margin-bottom: 0;
}
.list-group-item-heading {
    margin: 0;
    font-size: 14px;
    line-height: 1.4;
}
.list-group-item .btn {
    margin-top: 2px;
}
</style>
<!-- END: main --> 