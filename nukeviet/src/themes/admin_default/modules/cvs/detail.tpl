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
                        <a class="btn btn-primary" href="#" id="btn-apply-cv">
                            <i class="fa fa-check"></i> {LANG.apply_cv}
                        </a>
                        <a class="btn btn-info" href="#" id="btn-view-selected">
                            <i class="fa fa-list"></i> Các công việc đã nộp CV
                        </a>
                        <a class="btn btn-default" href="{BACK}">
                            <i class="fa fa-arrow-left"></i> {LANG.back}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="posts-container" style="display:none;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách bài viết</h3>
        </div>
        <div class="panel-body">
            <div id="loading" style="display:none;">
                <i class="fa fa-spinner fa-spin fa-2x"></i> Đang tải...
            </div>
            <div id="posts-list"></div>
            <div id="posts-pagination" class="pagination-wrapper" style="display:none;">
                <div class="pagination">
                    <a href="#" class="page-link prev" id="prev-page">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <div class="page-numbers" id="page-numbers"></div>
                    <a href="#" class="page-link next" id="next-page">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Thêm modal cho danh sách công việc đã nộp -->
<div class="modal fade" id="selectedPostsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-list"></i> Các công việc đã nộp CV</h4>
            </div>
            <div class="modal-body">
                <div id="selected-posts-container">
                    <!-- Danh sách sẽ được thêm vào đây -->
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

.post-item {
    margin-bottom: 20px;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.post-item:hover {
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.post-image {
    height: 25%;
    width: 100%;
}

.post-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.post-item:hover .post-image img {
    transform: scale(1.05);
}

.post-title {
    font-size: 16px;
    margin: 0 0 10px 0;
}

.post-title a {
    color: #333;
    text-decoration: none;
}

.post-title a:hover {
    color: #00a0d2;
}

.post-desc {
    color: #666;
    font-size: 13px;
    line-height: 1.5;
    height: 60px;
    overflow: hidden;
}

#btn-apply-cv {
    margin-right: 10px;
}

.fade-in {
    animation: fadeIn 0.5s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* CSS cho danh sách bài viết */
.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 15px;
    padding: 15px;
}

.post-item {
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.2s ease;
    height: 350px; /* Tổng chiều cao cố định */
    display: flex;
    flex-direction: column;
}

.post-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.post-image {
    height: 120px; /* Chiều cao cố định cho phần ảnh */
    overflow: hidden;
    flex: 0 0 120px; /* Không co giãn, giữ nguyên 150px */
    background: #f8f9fa;
}

.post-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    display: block;
    margin: 0 auto;
}

.post-info {
    padding: 12px;
    flex: 1;
    display: flex;
    flex-direction: column;
    position: relative;
}

.post-title {
    height: 42px; /* Chiều cao cố định cho tiêu đề - 2 dòng */
    margin: 0 0 8px 0;
    font-size: 16px;
    line-height: 1.3;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.post-title a {
    color: #333;
    text-decoration: none;
}

.post-title a:hover {
    color: #007bff;
}

.post-description {
    height: 72px; /* Chiều cao cố định cho mô tả - 4 dòng */
    color: #666;
    font-size: 13px;
    line-height: 1.4;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    margin-bottom: 12px;
}

.btn-sm {
    padding: 4px 8px;
    font-size: 12px;
}

#loading {
    text-align: center;
    padding: 15px;
}

/* Thêm CSS cho các nút */
.btn-selected {
    background-color: #6c757d;
    border-color: #6c757d;
    cursor: default;
}

.btn-cancel {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff;
}

.btn-cancel:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.button-group {
    position: absolute;
    bottom: 12px;
    left: 0;
    right: 0;
    text-align: center;
}

#btn-view-selected {
    margin: 0 10px;
}

.btn-success.status-btn {
    background-color: #5cb85c !important;
    border-color: #4cae4c !important;
    color: #fff !important;
    cursor: not-allowed;
}

.btn-danger.status-btn {
    background-color: #d9534f !important;
    border-color: #d43f3a !important;
    color: #fff !important;
    cursor: not-allowed;
}

.btn-group {
    display: inline-flex;
    gap: 5px;
}

.list-group-item .btn {
    padding: 3px 8px;
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
    var $postsContainer = $('#posts-container');
    var $postsList = $('#posts-list');
    var $loading = $('#loading');
    var $pagination = $('#posts-pagination');
    var id = '{ROW.id}';
    var checkss = '{CHECKSS}';
    var selectedPosts = new Set();
    var currentPage = 1;
    var totalPages = 1;

    // Định nghĩa hàm selectPost trong phạm vi global
    window.selectPost = function(postId) {
        if (!postId) return;
        
        selectedPosts.add(postId);
        $('#post-' + postId + ' .button-group').html(
            '<button class="btn btn-selected btn-sm" disabled>Đã chọn</button>' +
            '<button class="btn btn-cancel btn-sm" onclick="cancelSelection(' + postId + ')">Hủy</button>'
        );

        saveSelection(id, Array.from(selectedPosts));
    };

    // Định nghĩa hàm cancelSelection trong phạm vi global
    window.cancelSelection = function(postId) {
        if (!postId) return;
        console.log('Cancelling selection for post:', postId);
        
        if (confirm('Bạn có chắc muốn hủy nộp CV cho vị trí này?')) {
            selectedPosts.delete(postId);
            
            // Xóa item khỏi danh sách trong modal
            var $listItem = $('#selected-posts-container .list-group-item').filter(function() {
                return $(this).find('button[onclick*="cancelSelection(' + postId + ')"]').length > 0;
            });
            
            // Animation fade out trước khi xóa
            $listItem.fadeOut(300, function() {
                $(this).remove();
                
                // Kiểm tra nếu không còn item nào
                if ($('#selected-posts-container .list-group-item').length === 0) {
                    $('#selected-posts-container .list-group').html(
                        '<div class="alert alert-info m-bottom-none">Chưa nộp CV cho công việc nào</div>'
                    );
                }
            });

            // Cập nhật lại button trong grid posts nếu đang hiển thị
            $('#post-' + postId + ' .button-group').html(
                '<button class="btn btn-primary btn-sm" onclick="selectPost(' + postId + ')">Chọn</button>'
            );
            
            // Gọi API để lưu thay đổi
            saveSelection(id, Array.from(selectedPosts));
        }
    };

    // Hàm lưu trạng thái
    function saveSelection(cvId, postIds) {
        $.ajax({
            url: script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=detail&id=' + cvId,
            method: 'POST',
            data: {
                action: 'save_selection',
                cv_id: cvId,
                post_ids: postIds.join(','),
                checkss: checkss
            },
            success: function(response) {
                if (response.status == 'success') {
                    // Hiển thị thông báo thành công
                    if (postIds.length === 0) {
                        alert('Đã hủy nộp CV thành công');
                    }
                } else {
                    console.error('Error saving selection:', response.message);
                    alert('Có lỗi xảy ra: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', error);
                alert('Có lỗi xảy ra khi lưu thay đổi');
            }
        });
    }

    // Hàm load danh sách bài viết
    function loadPosts(page) {
        $.ajax({
            url: script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=detail&id=' + id,
            method: 'POST',
            data: {
                action: 'get_posts',
                checkss: checkss,
                page: page
            },
            beforeSend: function() {
                $loading.show();
            },
            success: function(response) {
                $loading.hide();
                if (response.status == 'success') {
                    var html = '<div class="posts-grid">';
                    if (response.data && response.data.length > 0) {
                        response.data.forEach(function(post) {
                            html += '<div class="post-item" id="post-' + post.id + '">';
                            html += '<div class="post-image"><img src="' + post.image + '" alt="' + post.title + '"></div>';
                            html += '<div class="post-info">';
                            html += '<h3 class="post-title"><a href="' + post.link + '">' + post.title + '</a></h3>';
                            if (post.description) {
                                html += '<p class="post-description">' + post.description + '</p>';
                            }
                            html += '<div class="button-group">';
                            if (post.is_selected) {
                                selectedPosts.add(post.id);
                                html += '<button class="btn btn-selected btn-sm" disabled>Đã chọn</button>';
                                html += '<button class="btn btn-cancel btn-sm" onclick="cancelSelection(' + post.id + ')">Hủy</button>';
                            } else {
                                html += '<button class="btn btn-primary btn-sm" onclick="selectPost(' + post.id + ')">Chọn</button>';
                            }
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        });
                    } else {
                        html += '<div class="alert alert-info">Không có bài viết nào</div>';
                    }
                    html += '</div>';
                    $postsList.html(html).show();
                    
                    // Cập nhật phân trang
                    currentPage = response.pagination.current_page;
                    totalPages = response.pagination.total_pages;
                    updatePagination();
                } else {
                    console.error('Error:', response.message);
                    alert(response.message || 'Có lỗi xảy ra khi tải danh sách bài viết');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', status, error);
                console.error('Response:', xhr.responseText);
                $loading.hide();
                alert('Có lỗi xảy ra khi tải danh sách bài viết: ' + error);
            }
        });
    }

    // Hàm cập nhật giao diện phân trang
    function updatePagination() {
        if (totalPages > 1) {
            $pagination.show();
            
            // Cập nhật nút Previous
            var $prevPage = $('#prev-page');
            if (currentPage > 1) {
                $prevPage.removeClass('disabled').attr('href', '#');
            } else {
                $prevPage.addClass('disabled').removeAttr('href');
            }
            
            // Cập nhật nút Next
            var $nextPage = $('#next-page');
            if (currentPage < totalPages) {
                $nextPage.removeClass('disabled').attr('href', '#');
            } else {
                $nextPage.addClass('disabled').removeAttr('href');
            }
            
            // Cập nhật số trang
            var $pageNumbers = $('#page-numbers');
            $pageNumbers.empty();
            
            // Thêm số trang đầu tiên
            if (currentPage > 2) {
                $pageNumbers.append(createPageLink(1));
                if (currentPage > 3) {
                    $pageNumbers.append('<span class="page-link disabled">...</span>');
                }
            }
            
            // Thêm các số trang xung quanh trang hiện tại
            for (var i = Math.max(1, currentPage - 1); i <= Math.min(totalPages, currentPage + 1); i++) {
                $pageNumbers.append(createPageLink(i));
            }
            
            // Thêm số trang cuối cùng
            if (currentPage < totalPages - 1) {
                if (currentPage < totalPages - 2) {
                    $pageNumbers.append('<span class="page-link disabled">...</span>');
                }
                $pageNumbers.append(createPageLink(totalPages));
            }
        } else {
            $pagination.hide();
        }
    }

    // Hàm tạo link cho số trang
    function createPageLink(page) {
        return $('<a>', {
            href: '#',
            class: 'page-link' + (page == currentPage ? ' active' : ''),
            text: page
        });
    }

    // Xử lý click vào nút Previous
    $('#prev-page').click(function(e) {
        e.preventDefault();
        if (currentPage > 1) {
            loadPosts(currentPage - 1);
        }
    });

    // Xử lý click vào nút Next
    $('#next-page').click(function(e) {
        e.preventDefault();
        if (currentPage < totalPages) {
            loadPosts(currentPage + 1);
        }
    });

    // Xử lý click vào số trang
    $(document).on('click', '#page-numbers .page-link', function(e) {
        e.preventDefault();
        var page = parseInt($(this).text());
        if (page != currentPage) {
            loadPosts(page);
        }
    });

    // Sửa lại hàm click vào nút Apply CV
    $('#btn-apply-cv').click(function(e) {
        e.preventDefault();
        
        if ($postsList.is(':hidden')) {
            loadPosts(1); // Load trang đầu tiên
            $postsContainer.show();
        } else {
            $postsList.hide();
            $postsContainer.hide();
        }
    });

    // Xử lý click vào nút xem danh sách đã nộp
    $('#btn-view-selected').click(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: script_name + '?' + nv_lang_variable + '=' + nv_lang_data + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=detail&id=' + {ROW.id},
            method: 'POST',
            data: {
                action: 'get_selected_posts',
                cv_id: {ROW.id},
                checkss: '{ROW.checkss}'
            },
            dataType: 'json',
            success: function(response) {
                if (response.status == 'success') {
                    var html = '<div class="list-group">';
                    if (response.data && response.data.length > 0) {
                        response.data.forEach(function(post) {
                            html += '<div class="list-group-item" id="selected-post-' + post.id + '">';
                            html += '<div class="row">';
                            html += '<div class="col-xs-12"><h4 class="list-group-item-heading">' + post.title + '</h4></div>';
                            html += '<div class="col-xs-12 text-right">';
                            html += '<div class="btn-group" role="group">';
                            
                            // Nút xem chi tiết luôn hiển thị
                            html += '<a href="' + post.preview_url + '" class="btn btn-info btn-xs" target="_blank"><i class="fa fa-eye"></i> Xem</a>';
                            
                            // Hiển thị nút theo trạng thái
                            if (post.cv_status == 1) { // Đã duyệt
                                html += '<button type="button" class="btn btn-success btn-xs status-btn" disabled><i class="fa fa-check"></i> Đã duyệt</button>';
                            } else if (post.cv_status == 2) { // Không duyệt
                                html += '<button type="button" class="btn btn-danger btn-xs status-btn" disabled><i class="fa fa-ban"></i> Không duyệt</button>';
                                html += '<button type="button" class="btn btn-danger btn-xs" onclick="cancelSelection(' + post.id + ')"><i class="fa fa-times"></i> Xóa</button>';
                            } else { // Chưa duyệt
                                html += '<button type="button" class="btn btn-warning btn-xs" onclick="cancelSelection(' + post.id + ')"><i class="fa fa-times"></i> Hủy</button>';
                            }
                            
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        });
                    } else {
                        html += '<div class="alert alert-info m-bottom-none">Chưa nộp CV cho công việc nào</div>';
                    }
                    html += '</div>';
                    $('#selected-posts-container').html(html);
                    $('#selectedPostsModal').modal('show');
                } else {
                    alert(response.message || 'Có lỗi xảy ra');
                }
            }
        });
    });
});
</script>
<!-- END: main -->
