<!-- BEGIN: main -->
<div class="posts-content">
    <!-- BEGIN: loop -->
    <div class="post-item">
        <div class="post-image">
            <a href="{ROW.link}" title="{ROW.title}">
                <img src="{ROW.image}" alt="{ROW.title}">
            </a>
        </div>
        <div class="post-info">
            <h3 class="post-title">
                <a href="{ROW.link}" title="{ROW.title}">{ROW.title}</a>
            </h3>
            <div class="company-name">{ROW.company_name}</div>
            <div class="post-description">{ROW.description}</div>
            <div class="post-meta">
                <div class="post-time">
                    <i class="fa fa-calendar"></i> {ROW.created_at}
                </div>
                <div class="post-cv-count">
                    <i class="fa fa-file-pdf-o"></i> {ROW.cv_count} CV
                </div>
            </div>
        </div>
    </div>
    <!-- END: loop -->
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
.posts-content {
    padding: 15px 0;
}
.post-item {
    display: flex;
    align-items: flex-start;
    padding: 15px;
    margin-bottom: 15px;
    background: #fff;
    border: 1px solid #e8e8e8;
    border-radius: 4px;
    transition: all 0.2s;
}
.post-item:hover {
    background: #f9f9f9;
}
.post-image {
    flex: 0 0 80px;
    margin-right: 15px;
}
.post-image img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    border: 1px solid #eee;
    border-radius: 4px;
}
.post-info {
    flex: 1;
    min-width: 0;
}
.post-title {
    margin: 0 0 8px;
    font-size: 16px;
    line-height: 1.4;
}
.post-title a {
    color: #333;
    text-decoration: none;
}
.post-title a:hover {
    color: #0056b3;
}
.company-name {
    color: #666;
    font-size: 14px;
    margin-bottom: 5px;
}
.post-description {
    color: #666;
    font-size: 14px;
    line-height: 1.4;
    margin-bottom: 5px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.post-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 13px;
    color: #999;
}
.post-time {
    display: flex;
    align-items: center;
}
.post-time i {
    margin-right: 5px;
}
.post-cv-count {
    display: flex;
    align-items: center;
    background: #f8f9fa;
    padding: 2px 8px;
    border-radius: 12px;
}
.post-cv-count i {
    margin-right: 5px;
    color: #dc3545;
}

/* Pagination Styles */
.pagination-wrapper {
    margin-top: 30px;
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
    .post-item {
        padding: 12px;
    }
    .post-image {
        flex: 0 0 60px;
        margin-right: 12px;
    }
    .post-image img {
        width: 60px;
        height: 60px;
    }
    .post-title {
        font-size: 15px;
        margin-bottom: 6px;
    }
    .company-name {
        font-size: 13px;
        margin-bottom: 4px;
    }
    .post-description {
        font-size: 13px;
        margin-bottom: 4px;
        -webkit-line-clamp: 3;
    }
    .post-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
    }
    
    /* Mobile Pagination */
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
<!-- END: main -->