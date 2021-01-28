<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: blog.php
| Author: karrak
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
require_once __DIR__.'../../../../maincore.php';
if (defined('BLOG_EXIST')) {
    $limit = 15;
    $result = dbquery("SELECT blog_id as id, blog_subject as subject
        FROM ".DB_BLOG."
        ".(multilang_table("BL") ? "WHERE ".in_group('blog_language', LANGUAGE)." AND " : "WHERE ").groupaccess('blog_visibility')."
        AND (blog_start = '0'|| blog_start <= ".time().")
        AND (blog_end = '0'|| blog_end >= ".time().") AND blog_draft = '0'
        ORDER BY blog_start DESC
        LIMIT 0,".$limit."
    ");

    if (dbrows($result)) {
        while($data = dbarray($result)) {
            $cloud[] = [
                'title'     => $locale['blog'],
                'term'      => $data['subject'],
                'catid'     => $data['id'],
                'cloudlink' => INFUSIONS.'blog/blog.php?readmore='.$data['id']
            ];
        }
    }
}
