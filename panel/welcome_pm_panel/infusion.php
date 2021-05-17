<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
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

$locale = fusion_get_locale("", WPM_LOCALE);

$inf_title = $locale['WPM_000'];
$inf_description = $locale['WPM_001'];
$inf_version = "1.0.1";
$inf_developer = "karrak";
$inf_email = "admin@fusionhu.com";
$inf_weburl = "https://fusionhu.com";
$inf_folder = "welcome_pm_panel";
$inf_image = "wpm.png";

$inf_mlt[] = [
    'title'  => $inf_title,
    'rights' => "WPM"
];

$inf_newtable[] = DB_WELCOME_PM." (
    wp_id TINYINT(1) UNSIGNED NOT NULL AUTO_INCREMENT,
    wp_userid INT(11) NOT NULL DEFAULT '0',
    wp_active INT(1) DEFAULT '0',
    wp_sbox INT(1) DEFAULT '0',
    wp_language VARCHAR(50) NOT NULL DEFAULT '".LANGUAGE."',
PRIMARY KEY (wp_id)
) ENGINE=MyISAM DEFAULT CHARSET=UTF8 COLLATE=utf8_unicode_ci";

if (!column_exists('users', 'user_welcome')) {
    $inf_altertable[] = DB_USERS." ADD user_welcome INT(1) NOT NULL DEFAULT '0'";
    $last_category = dbresult(dbquery("SELECT MAX(field_cat_id) FROM ".DB_USER_FIELD_CATS), 0);
    $inf_insertdbrow[] = DB_USER_FIELDS." (field_title, field_name, field_cat, field_type, field_order) VALUES ('".$locale['WPM_000']."', 'user_welcome', ".$last_category.", 'file', 2)";
}

$inf_insertdbrow[] = DB_PANELS." (panel_name, panel_filename, panel_content, panel_side, panel_order, panel_type, panel_access, panel_display, panel_status, panel_url_list, panel_restriction, panel_languages) VALUES('".$inf_title."', '".$inf_folder."', '', '5', '3', 'file', '".USER_LEVEL_MEMBER."', '0', '1', '', '3', '".fusion_get_settings('enabled_languages')."')";

$enabled_languages = makefilelist(LOCALE, ".|..", TRUE, "folders");
if (!empty($enabled_languages)) {
    foreach($enabled_languages as $language) {
        if (file_exists(WPM_PATH.'locale/'.$language.'/wpm.php')) {
            include WPM_PATH.'locale/'.$language.'/wpm.php';
        } else {
            include WPM_PATH.'locale/Hungarian/wpm.php';
        }

        $mlt_adminpanel[$language][] = [
            'rights'   => "WPM",
            'image'    => $inf_image,
            'title'    => $locale['WPM_000'],
            'panel'    => "admin.php",
            'page'     => 5,
            'language' => $language
        ];

		$mlt_insertdbrow[$language][] = DB_WELCOME_PM." (wp_userid, wp_active, wp_sbox, wp_language) VALUES ('".fusion_get_userdata('user_id')."', '0', '0', '".$language."')";

		$mlt_deldbrow[$language][] = DB_WELCOME_PM." WHERE wp_language = '".$language."'";
        $mlt_deldbrow[$language][] = DB_ADMIN." WHERE admin_rights = 'WPM' AND admin_language = '".$language."'";
    }
} else {
    $inf_adminpanel[] = [
        'rights'   => "WPM",
        'image'    => $inf_image,
        'title'    => $locale['WPM_000'],
        'panel'    => "admin.php",
        'page'     => 5,
        'language' => LANGUAGE
    ];
	$inf_insertdbrow[] = DB_WELCOME_PM." (wp_userid, wp_active, wp_sbox, wp_language) VALUES ('".fusion_get_userdata('user_id')."', '0', '0', '".LANGUAGE."')";
}

$inf_droptable[] = DB_WELCOME_PM;
$inf_deldbrow[] = DB_PANELS." WHERE panel_filename = '".$inf_folder."'";
$inf_deldbrow[] = DB_ADMIN." WHERE admin_rights = 'WPM'";
$inf_deldbrow[] = DB_LANGUAGE_TABLES." WHERE mlt_rights = 'WPM'";

if (column_exists('users', 'user_welcome')) {
    $inf_dropcol[] = ['table' => DB_USERS, 'column' => 'user_welcome'];
    $inf_deldbrow[] = DB_USER_FIELDS." WHERE field_name = 'user_welcome'";
}
