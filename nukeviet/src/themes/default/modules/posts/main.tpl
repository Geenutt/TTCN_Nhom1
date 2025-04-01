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
            <div class="post-time">{ROW.created_at}</div>
        </div>
    </div>
    <!-- END: loop -->
</div>

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
.post-time {
    color: #999;
    font-size: 13px;
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
    .post-time {
        font-size: 12px;
    }
}
</style>
<!-- END: main -->