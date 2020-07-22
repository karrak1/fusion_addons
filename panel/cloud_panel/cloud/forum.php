<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: forum.php
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

if (defined('FORUM_EXIST')) {
    $limit = 15;
    $result = dbquery("SELECT f.forum_id as id, f.forum_access, t.thread_id, t.thread_subject as subject
        FROM ".DB_FORUMS." f
        LEFT JOIN ".DB_FORUM_THREADS." t ON f.forum_id = t.forum_id
        ".(multilang_table("FO") ? "WHERE ".in_group('f.forum_language', LANGUAGE)." AND " : "WHERE ").groupaccess('f.forum_access')." AND f.forum_type!='1' AND f.forum_type!='3' AND t.thread_hidden='0'
        GROUP BY t.thread_id
        ORDER BY t.thread_lastpost DESC
        LIMIT 0,".$limit."
    ");

    if (dbrows($result)) {
        while ($data = dbarray($result)) {
            $cloud[] = [
                'term'      => $data['subject'],
                'catid'     => $data['id'],
                'cloudlink' => FORUM."viewthread.php?thread_id==".$data['id']
            ];
        }
    }
}
