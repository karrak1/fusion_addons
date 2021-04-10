<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: downloads.php
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
if (defined('DOWNLOADS_EXIST')) {
    $result = dbquery("SELECT d.download_id as id, d.download_title as subject, d.download_keywords as ckeywords
        FROM ".DB_DOWNLOADS." d
        INNER JOIN ".DB_DOWNLOAD_CATS." dc ON d.download_cat = dc.download_cat_id
        ".(multilang_table("DL") ? "WHERE ".in_group('download_cat_language', LANGUAGE)." AND " : "WHERE ").groupaccess('download_visibility')."
        ORDER BY download_datestamp DESC
        LIMIT 0,".CLOUD_LIMIT."
    ");

    if (dbrows($result)) {
        while ($data = dbarray($result)) {
            if (!empty($data['ckeywords'])) {
                $ckeywords = explode(",", $data['ckeywords']);
                foreach($ckeywords as $dkeyword) {
                    $cloud[] = [
                        'title'     => $locale['downloads'],
                        'term'      => $dkeyword,
                        'catid'     => $data['id'],
                        'cloudlink' => INFUSIONS."downloads/downloads.php?download_id=".$data['id']
                    ];
                }
            } else {
                $cloud[] = [
                    'title'     => $locale['downloads'],
                    'term'      => $data['subject'],
                    'catid'     => $data['id'],
                    'cloudlink' => INFUSIONS."downloads/downloads.php?download_id=".$data['id']
                ];
            }
        }
    }
}
