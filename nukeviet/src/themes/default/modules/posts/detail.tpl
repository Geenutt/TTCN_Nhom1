<!-- BEGIN: main -->
<div class="post-detail">
    <div class="container">
        <div class="main-content">
            <div class="company-header">
                <div class="company-logo">
                    <img src="{ROW.image}" alt="{ROW.title}">
                </div>
                <div class="company-info">
                    <h1 class="post-title">{ROW.title}</h1>
                    <div class="post-description">{ROW.description}</div>
                    <div class="post-time">
                        <i class="fa fa-calendar"></i> {ROW.created_at}
                    </div>
                </div>
            </div>

            <div class="post-content">
                <div class="job-detail">
                    {ROW.content}
                </div>
            </div>
        </div>

        <!-- BEGIN: related_posts -->
        <div class="related-posts">
            <h3 class="section-title">Việc làm tương tự</h3>
            <div class="related-slider">
                <!-- BEGIN: loop -->
                <div class="related-item">
                    <div class="related-image">
                        <a href="{POST.link}" title="{POST.title}">
                            <img src="{POST.image}" alt="{POST.title}">
                        </a>
                    </div>
                    <div class="related-info">
                        <h4 class="related-title">
                            <a href="{POST.link}" title="{POST.title}">{POST.title}</a>
                        </h4>
                        <div class="related-company">{POST.company_name}</div>
                        <div class="related-description">{POST.description}</div>
                        <div class="related-time">{POST.created_at}</div>
                    </div>
                </div>
                <!-- END: loop -->
            </div>
        </div>
        <!-- END: related_posts -->
    </div>
</div>

<style>
.post-detail {
    padding: 30px 0;
    background: #f8f9fa;
}
.main-content {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    overflow: hidden;
    margin-bottom: 30px;
}
.company-header {
    display: flex;
    align-items: flex-start;
    padding: 24px;
    border-bottom: 1px solid #eee;
}
.company-logo {
    flex: 0 0 120px;
    margin-right: 24px;
}
.company-logo img {
    width: 120px;
    height: 120px;
    object-fit: contain;
    border: 1px solid #eee;
    border-radius: 4px;
}
.company-info {
    flex: 1;
}
.post-title {
    font-size: 24px;
    line-height: 1.4;
    margin: 0 0 12px;
    color: #333;
}
.post-description {
    color: #666;
    font-size: 15px;
    line-height: 1.5;
    margin-bottom: 12px;
}
.post-time {
    color: #999;
    font-size: 14px;
}
.post-time i {
    margin-right: 5px;
}
.post-content {
    padding: 24px;
}
.section-title {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin: 0 0 16px;
    padding-bottom: 12px;
    border-bottom: 2px solid #f0f0f0;
}
.job-detail {
    color: #333;
    font-size: 15px;
    line-height: 1.6;
}
.related-posts {
    margin-top: 40px;
    background: #fff;
    padding: 24px;
    border-radius: 8px;
}
.related-slider {
    display: flex;
    overflow-x: auto;
    gap: 20px;
    padding: 4px;
    margin: 0 -4px;
    scrollbar-width: thin;
    scrollbar-color: #ccc transparent;
}
.related-slider::-webkit-scrollbar {
    height: 6px;
}
.related-slider::-webkit-scrollbar-track {
    background: transparent;
}
.related-slider::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 6px;
}
.related-item {
    flex: 0 0 280px;
    background: #fff;
    border: 1px solid #eee;
    border-radius: 6px;
    padding: 12px;
    transition: all 0.2s;
}
.related-item:hover {
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
.related-image {
    margin-bottom: 12px;
}
.related-image img {
    width: 100%;
    height: 80px;
    object-fit: contain;
    border: 1px solid #eee;
    border-radius: 4px;
}
.related-title {
    font-size: 15px;
    line-height: 1.4;
    margin: 0 0 8px;
    height: 42px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.related-title a {
    color: #333;
    text-decoration: none;
}
.related-title a:hover {
    color: #0056b3;
}
.related-company {
    color: #666;
    font-size: 13px;
    margin-bottom: 4px;
    font-weight: 500;
}
.related-description {
    color: #666;
    font-size: 13px;
    margin-bottom: 4px;
    height: 36px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.related-time {
    color: #999;
    font-size: 12px;
}

@media (max-width: 767px) {
    .company-header {
        padding: 16px;
    }
    .company-logo {
        flex: 0 0 80px;
        margin-right: 16px;
    }
    .company-logo img {
        width: 80px;
        height: 80px;
    }
    .post-title {
        font-size: 20px;
        margin-bottom: 8px;
    }
    .post-description {
        font-size: 14px;
        margin-bottom: 8px;
    }
    .post-content {
        padding: 16px;
    }
    .section-title {
        font-size: 16px;
        margin-bottom: 12px;
    }
    .job-detail {
        font-size: 14px;
    }
    .related-posts {
        margin-top: 30px;
        padding: 16px;
    }
    .related-slider {
        gap: 12px;
    }
    .related-item {
        flex: 0 0 260px;
    }
}
</style>
<!-- END: main --> 