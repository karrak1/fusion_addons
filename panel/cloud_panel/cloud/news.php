<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: news.php
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
if (defined('NEWS_EXIST')) {
    $limit = 15;
    $result = dbquery("SELECT news_id as id, news_subject as subject
        FROM ".DB_NEWS."
        ".(multilang_table("NS") ? "WHERE ".in_group('news_language', LANGUAGE)." AND " : "WHERE ").groupaccess('news_visibility')."
        AND (news_start = '0' || news_start <= ".time().") AND (news_end = '0' || news_end >= ".time().") AND news_draft = '0'
        ORDER BY news_start DESC
        LIMIT 0,".$limit."
     ");

    if (dbrows($result)) {
        while($data = dbarray($result)) {
            $cloud[] = [
                'title'     => $locale['news'],
                'term'      => $data['subject'],
                'catid'     => $data['id'],
                'cloudlink' => INFUSIONS.'news/news.php?readmore='.$data['id']
            ];
        }
    }
}
