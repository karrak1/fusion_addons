<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: news.php
| Author: karrak
| Modified by : Ephyx [CORE keywords or Title]
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
    $result = dbquery("SELECT news_id as id, news_subject as subject, news_keywords as ckeywords
        FROM ".DB_NEWS."
        ".(multilang_table("NS") ? "WHERE ".in_group('news_language', LANGUAGE)." AND " : "WHERE ").groupaccess('news_visibility')."
        AND (news_start = '0' || news_start <= ".time().") AND (news_end = '0' || news_end >= ".time().") AND news_draft = '0'
        ORDER BY news_start DESC
        LIMIT 0,".CLOUD_LIMIT."
     ");


    if (dbrows($result)) {
        while($data = dbarray($result)) {
            if (!empty($data['ckeywords'])) {
                $ckeywords = explode(",", $data['ckeywords']);
                foreach($ckeywords as $nkeyword) {
                    $cloud[] = [
                        'title'     => $locale['news'],
                        'term'      => $nkeyword,
                        'catid'     => $data['id'],
                        'cloudlink' => INFUSIONS.'news/news.php?readmore='.$data['id']
                    ];
                }
            } else {
                $cloud[] = [
                    'title'     => $locale['news'],
                    'term'      => $data['subject'],
                    'catid'     => $data['id'],
                    'cloudlink' => INFUSIONS.'news/news.php?readmore='.$data['id']
                ];
            }
        }
    }
}
