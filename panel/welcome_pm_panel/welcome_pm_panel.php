<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
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

        if ($wpsettings['wp_active'] == 1 && $wpuser['user_welcome'] == 0) {

		    $sender_user_id = 1;
		    $subject = $locale['WPM_005'];
		    $message = $locale['WPM_006'];
		    send_pm($wpuser['user_id'], $sender_user_id, $subject, $message);

            if ($wpsettings['wp_sbox'] == 1 && defined("DB_SHOUTBOX")) {
                $message = str_replace(
                ["[USERNAME]"],
                [$wpuser['user_name']],
                $locale['WPM_007']
                );

                dbquery("INSERT INTO ".DB_SHOUTBOX." (shout_name, shout_message, shout_datestamp, shout_language) VALUES ('Admin', '".$message."', '".time()."', '".LANGUAGE."')");
            }

            dbquery("UPDATE ".DB_USERS." SET user_welcome = '1' WHERE user_id = '".$wpuser['user_id']."' LIMIT 1");
        }
    }
}
