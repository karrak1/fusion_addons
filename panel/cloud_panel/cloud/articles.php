<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: articles.php
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
if (defined('ARTICLES_EXIST')) {
    $limit = 15;

    $result = dbquery("SELECT a.article_id as id, a.article_subject as subject
        FROM ".DB_ARTICLES." AS a
        INNER JOIN ".DB_ARTICLE_CATS." AS ac ON a.article_cat = ac.article_cat_id
        WHERE a.article_draft = '0' AND ac.article_cat_status = '1' AND ".groupaccess("a.article_visibility")." AND ".groupaccess("ac.article_cat_visibility")."
        ".(multilang_table("AR") ? "AND ".in_group('a.article_language', LANGUAGE)." AND ".in_group('ac.article_cat_language', LANGUAGE) : "")."
        ORDER BY a.article_datestamp DESC
        LIMIT 0,".$limit."
    ");

    if (dbrows($result)) {
        while($data = dbarray($result)) {
            $cloud[] = [
                'term'      => $data['subject'],
                'catid'     => $data['id'],
                'cloudlink' => INFUSIONS."articles/articles.php?article_id=".$data['id']
            ];
        }
    }
}
