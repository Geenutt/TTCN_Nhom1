<!-- BEGIN: main -->
<div class="well">
    <form action="{NV_BASE_ADMINURL}index.php" method="get">
        <input type="hidden" name="{NV_LANG_VARIABLE}" value="{NV_LANG_DATA}" />
        <input type="hidden" name="{NV_NAME_VARIABLE}" value="{MODULE_NAME}" />
        <input type="hidden" name="{NV_OP_VARIABLE}" value="{OP}" />
        <div class="row">
            <div class="col-xs-24 col-md-4">
                <div class="form-group">
                    <input class="form-control" type="text" value="{SEARCH.title}" name="search_title" placeholder="{LANG.search_title}" />
                </div>
            </div>
            <div class="col-xs-12 col-md-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="{LANG.search}"><i class="fa fa-search"></i> {LANG.search}</button>
                </div>
            </div>
            <div class="col-xs-12 col-md-18 text-right">
                <div class="form-group">
                    <a class="btn btn-success" href="{ADD_NEW_CV}"><i class="fa fa-plus"></i> {LANG.create}</a>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="w100 text-center">
                    <a href="{BASE_URL}&amp;sortby=id&amp;sorttype={SORTTYPE}">ID 
                        <!-- BEGIN: sort_weight -->
                        <em class="fa fa-sort-{WEIGHT.sorttype}">&nbsp;</em>
                        <!-- END: sort_weight -->
                    </a>
                </th>
                <th class="text-center">{LANG.title}</th>
                <th class="w150 text-center">{LANG.created_at}</th>
                <th class="w150 text-center">{LANG.updated_at}</th>
                <th class="w150 text-center">{LANG.action}</th>
            </tr>
        </thead>
        <!-- BEGIN: loop -->
        <tbody>
            <tr>
                <td class="text-center">{ROW.id}</td>
                <td class="text-center">{ROW.title}</td>
                <td class="text-center">{ROW.created_at}</td>
                <td class="text-center">{ROW.updated_at}</td>
                <td class="text-center">
                    <a class="btn btn-default btn-sm" href="{ROW.link_view}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-default btn-sm" href="{ROW.link_edit}"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-default btn-sm" href="javascript:void(0);" onclick="nv_module_del({ROW.id});"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
        <!-- END: loop -->
    </table>
</div>

<!-- BEGIN: empty -->
<div class="alert alert-info">{LANG.empty}</div>
<!-- END: empty -->

<!-- BEGIN: generate_page -->
<div class="text-center">
    {GENERATE_PAGE}
</div>
<!-- END: generate_page -->

<script type="text/javascript">
function nv_module_del(id) {
    if (confirm(nv_is_del_confirm[0])) {
        $.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=delete&nocache=' + new Date().getTime(), 'id=' + id, function(res) {
            if (res.status == 'OK') {
                window.location.href = window.location.href;
            } else {
                alert(res.message);
            }
        });
    }
    return false;
}
</script>
<!-- END: main -->
