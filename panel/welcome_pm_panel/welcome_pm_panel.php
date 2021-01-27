<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: welcome_pm_panel.php
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
defined('IN_FUSION') || exit;

if (iMEMBER) {

    if (defined("DB_WELCOME_PM")) {
        $locale = fusion_get_locale("", WPM_LOCALE);
        $wpuser = fusion_get_userdata();
        $wpsettings = dbarray(dbquery("SELECT * FROM ".DB_WELCOME_PM.(multilang_table("WPM") ? " WHERE ".in_group('wp_language', LANGUAGE) : '')));

        if (!empty($wpsettings['wp_active']) && empty($wpuser['user_welcome'])) {

		    send_pm($wpuser['user_id'], $wpsettings['wp_userid'], $locale['WPM_005'], $locale['WPM_006']);

            if (!empty($wpsettings['wp_sbox']) && defined("DB_SHOUTBOX")) {
                $message = str_replace(["[USERNAME]"], [$wpuser['user_name']], $locale['WPM_007']);

                dbquery("INSERT INTO ".DB_SHOUTBOX." (shout_name, shout_message, shout_datestamp, shout_language) VALUES ('".$locale['WPM_003']."', '".$message."', '".time()."', '".LANGUAGE."')");
            }

            dbquery("UPDATE ".DB_USERS." SET user_welcome = :wpuser WHERE user_id = :userid LIMIT 1", [':wpuser' => '1', ':userid' => (int)$wpuser['user_id']]);
        }
    }
}
