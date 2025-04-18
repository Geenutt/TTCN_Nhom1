<!-- BEGIN: empty -->
<div class="well">
    <div class="row">
        <!-- Form tìm kiếm -->
        <div class="col-xs-19 col-sm-19 col-md-19">
            <form action="{FORM_ACTION}" method="get" class="form-inline">
                <input type="hidden" name="{NV_LANG_VARIABLE}" value="{NV_LANG_DATA}"/>
                <input type="hidden" name="{NV_NAME_VARIABLE}" value="{MODULE_NAME}"/>
                <input type="hidden" name="{NV_OP_VARIABLE}" value="{OP}"/>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="search_title" value="{SEARCH.title}" placeholder="{LANG.search_title}" style="width: 250px;">
                </div>
                
                <div class="form-group">
                    <select class="form-control" name="search_status">
                        <option value="1"{SEARCH.status == 1 ? ' selected="selected"' : ''}>{LANG.status_1}</option>
                        <option value="0"{SEARCH.status == 0 ? ' selected="selected"' : ''}>{LANG.status_0}</option>
                        <option value="-1" selected="selected">---{LANG.search_status_all}---</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> {LANG.search}</button>
            </form>
        </div>
        
        <!-- Nút thêm mới -->
        <div class="col-xs-5 col-sm-5 col-md-5 text-right">
            <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=create" class="btn btn-success"><i class="fa fa-plus"></i> {LANG.create}</a>
        </div>
    </div>
</div>
<div class="alert alert-info">{LANG.empty}</div>
<!-- END: empty -->

<!-- BEGIN: main -->
<!-- Thanh công cụ -->
<div class="well">
    <div class="row">
        <!-- Form tìm kiếm -->
        <div class="col-xs-19 col-sm-19 col-md-19">
            <form action="{FORM_ACTION}" method="get" class="form-inline">
                <input type="hidden" name="{NV_LANG_VARIABLE}" value="{NV_LANG_DATA}"/>
                <input type="hidden" name="{NV_NAME_VARIABLE}" value="{MODULE_NAME}"/>
                <input type="hidden" name="{NV_OP_VARIABLE}" value="{OP}"/>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="search_title" value="{SEARCH.title}" placeholder="{LANG.search_title}" style="width: 250px;">
                </div>
                
                <div class="form-group">
                    <select class="form-control" name="search_status">
                        <option value="1"{SEARCH.status == 1 ? ' selected="selected"' : ''}>{LANG.status_1}</option>
                        <option value="0"{SEARCH.status == 0 ? ' selected="selected"' : ''}>{LANG.status_0}</option>
                        <option value="-1" selected="selected">---{LANG.search_status_all}---</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> {LANG.search}</button>
            </form>
        </div>
        
        <!-- Nút thêm mới -->
        <div class="col-xs-5 col-sm-5 col-md-5 text-right">
            <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=create" class="btn btn-success"><i class="fa fa-plus"></i> {LANG.create}</a>
        </div>
    </div>
</div>

<!-- Danh sách bài viết -->
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="80">
                    ID
                    <div class="btn-group-vertical sort-buttons">
                        <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;sortby=id&amp;sorttype=ASC&amp;search_title={SEARCH.title}&amp;search_status={SEARCH.status}" 
                            class="sort-btn{SORTBY == 'id' && SORTTYPE == 'ASC' ? ' active' : ''}" title="{LANG.sort_asc}">
                            <i class="fa fa-caret-up"></i>
                        </a>
                        <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;sortby=id&amp;sorttype=DESC&amp;search_title={SEARCH.title}&amp;search_status={SEARCH.status}" 
                            class="sort-btn{SORTBY == 'id' && SORTTYPE == 'DESC' ? ' active' : ''}" title="{LANG.sort_desc}">
                            <i class="fa fa-caret-down"></i>
                        </a>
                    </div>
                </th>
                <th>{LANG.title}</th>
                <th>{LANG.created_at}</th>
                <th>{LANG.updated_at}</th>
                <th>{LANG.status}</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <!-- BEGIN: loop -->
            <tr>
                <td>{ROW.id}</td>
                <td>{ROW.title}</td>
                <td>{ROW.created_at}</td>
                <td>{ROW.updated_at}</td>
                <td>{ROW.status_text}</td>
                <td>
                    <a href="{ROW.detail_url}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="{ROW.edit_url}" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm delete-btn" data-id="{ROW.id}" data-checkss="{ROW.checkss}"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
            <!-- END: loop -->
        </tbody>
    </table>
</div>

<!-- BEGIN: generate_page -->
<div class="pagination-wrapper">
    <div class="pagination">
        <!-- BEGIN: prev_page -->
        <a href="{PREV_PAGE_URL}" class="page-link prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <!-- END: prev_page -->
        
        <!-- BEGIN: prev_page_disabled -->
        <span class="page-link prev disabled">
            <i class="fa fa-angle-left"></i>
        </span>
        <!-- END: prev_page_disabled -->
        
        <div class="page-numbers">
            <!-- BEGIN: page_number -->
            <a href="{PAGE_URL}" class="page-link {ACTIVE}">{PAGE_NUMBER}</a>
            <!-- END: page_number -->
        </div>
        
        <!-- BEGIN: next_page -->
        <a href="{NEXT_PAGE_URL}" class="page-link next">
            <i class="fa fa-angle-right"></i>
        </a>
        <!-- END: next_page -->
        
        <!-- BEGIN: next_page_disabled -->
        <span class="page-link next disabled">
            <i class="fa fa-angle-right"></i>
        </span>
        <!-- END: next_page_disabled -->
    </div>
</div>
<!-- END: generate_page -->

<style>
.well {
    padding: 10px 15px;
    margin-bottom: 15px;
}
.form-inline .form-group {
    margin-right: 10px;
}
.form-inline .form-control {
    width: auto;
}
.btn {
    margin-bottom: 0;
}
th {
    position: relative;
}
.sort-buttons {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
}
.sort-btn {
    background: none;
    border: none;
    padding: 0 5px;
    color: #666;
    display: block;
    line-height: 1;
}
.sort-btn:hover {
    color: #333;
    text-decoration: none;
}
.sort-btn.active {
    color: #000;
}
.sort-btn i {
    font-size: 14px;
}

/* Pagination Styles */
.pagination-wrapper {
    margin-top: 20px;
    text-align: center;
}
.pagination {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}
.page-numbers {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    margin: 0 5px;
}
.page-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 36px;
    height: 36px;
    padding: 0 12px;
    font-size: 14px;
    color: #666;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.2s;
}
.page-link:hover {
    color: #0056b3;
    background: #f8f9fa;
    border-color: #0056b3;
}
.page-link.active {
    color: #fff;
    background: #0056b3;
    border-color: #0056b3;
}
.page-link.prev,
.page-link.next {
    padding: 0 8px;
}
.page-link.prev i,
.page-link.next i {
    font-size: 16px;
}
.page-link.disabled {
    color: #ccc;
    background: #f8f9fa;
    border-color: #ddd;
    cursor: not-allowed;
    pointer-events: none;
}

@media (max-width: 767px) {
    .pagination {
        gap: 3px;
    }
    .page-numbers {
        gap: 3px;
        margin: 0 3px;
    }
    .page-link {
        min-width: 32px;
        height: 32px;
        padding: 0 8px;
        font-size: 13px;
    }
    .page-link.prev,
    .page-link.next {
        padding: 0 6px;
    }
}
</style>

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