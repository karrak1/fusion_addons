<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: infusion.php
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

$locale = fusion_get_locale("", OTPI_LOCALE);

$inf_title = $locale['OTPI_000'];
$inf_description = $locale['OTPI_001'];
$inf_version = "1.0";
$inf_developer = "karrak";
$inf_email = "admin@fusionhu.com";
$inf_weburl = "https://fusionhu.com";
$inf_folder = "online_time_panel";
$inf_image = "online_time.svg";

$inf_mlt[] = [
    'title'  => $inf_title,
    'rights' => "OTPI"
];

$inf_insertdbrow[] = DB_PANELS." (panel_name, panel_filename, panel_content, panel_side, panel_order, panel_type, panel_access, panel_display, panel_status, panel_url_list, panel_restriction, panel_languages) VALUES('".$inf_title."', '".$inf_folder."', '', '4', '2', 'file', '0', '1', '1', '', '3', '".fusion_get_settings('enabled_languages')."')";
//$inf_insertdbrow[] = DB_PANELS." (panel_name, panel_filename, panel_content, panel_side, panel_order, panel_type, panel_access, panel_display, panel_status, panel_url_list, panel_restriction, panel_languages) VALUES('online panel', 'online_panel', '', '5', '2', 'file', '0', '1', '1', '', '3', '".fusion_get_settings('enabled_languages')."')";

//if (!column_exists(DB_USERS, 'user_online')) {
    //$inf_altertable[] = DB_USERS." ADD user_online INT(11) UNSIGNED NOT NULL AFTER user_status";
//}

$settings = [
    'online_time'  => 300,
    'online_limit' => 10,
    'online_page'  => 20
];

foreach ($settings as $name => $value) {
    $inf_insertdbrow[] = DB_SETTINGS_INF." (settings_name, settings_value, settings_inf) VALUES ('".$name."', '".$value."', '".$inf_folder."')";
}

$enabled_languages = makefilelist(LOCALE, ".|..", TRUE, "folders");
if (!empty($enabled_languages)) {
    foreach ($enabled_languages as $language) {
        if (file_exists(OTPI_CLASS."locale/".$language."/otime.php")) {
            include OTPI_CLASS."locale/".$language."/otime.php";
        }

        $mlt_adminpanel[$language][] = [
            'rights'   => "OTPI",
            'image'    => $inf_image,
            'title'    => $locale['OTPI_002'],
            'panel'    => "admin.php",
            'page'     => 5,
            'language' => $language
        ];

        $mlt_deldbrow[$language][] = DB_ADMIN." WHERE admin_rights = 'OTPI' AND admin_language = '".$language."'";
    }
} else {
    $inf_adminpanel[] = [
        'rights'   => "OTPI",
        'image'    => $inf_image,
        'title'    => $locale['OTPI_002'],
        'panel'    => "admin.php",
        'page'     => 5,
        'language' => LANGUAGE
    ];
}

//$inf_dropcol[] = ['table' => DB_USERS, 'column' => 'user_online'];
$inf_deldbrow[] = DB_PANELS." WHERE panel_filename = '".$inf_folder."'";
$inf_deldbrow[] = DB_PANELS." WHERE panel_filename='online_panel'";
$inf_deldbrow[] = DB_ADMIN." WHERE admin_rights = 'OTPI'";
$inf_deldbrow[] = DB_SETTINGS_INF." WHERE settings_inf = '".$inf_folder."'";
$inf_deldbrow[] = DB_LANGUAGE_TABLES." WHERE mlt_rights = 'OTPI'";
