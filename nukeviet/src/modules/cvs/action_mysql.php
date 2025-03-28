<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 2-9-2010 14:43
 */

if (!defined('NV_IS_FILE_MODULES')) {
    die('Stop!!!');
}

// Bảng chính của module CV
$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data;
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_posts";

$sql_create_module = $sql_drop_module;

// Tạo bảng chính
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . " (
    id int(11) unsigned NOT NULL AUTO_INCREMENT,
    title varchar(250) NOT NULL DEFAULT '',
    link varchar(250) NOT NULL DEFAULT '',
    selected_post_ids text DEFAULT NULL,
    created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=MyISAM";

// Tạo bảng trung gian để lưu trạng thái CV với từng job
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_posts (
    cv_id int(11) NOT NULL,
    post_id int(11) NOT NULL,
    status tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: chưa duyệt, 1: đã duyệt, 2: không duyệt',
    created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (cv_id, post_id)
) ENGINE=MyISAM";