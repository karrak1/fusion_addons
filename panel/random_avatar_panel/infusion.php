<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: infusion_db.php
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
(defined('IN_FUSION') || exit);

$locale = fusion_get_locale("", RAP_LOCALE);

$inf_title = $locale['RAP_00'];
$inf_description = $locale['RAP_01'];
$inf_version = "1.0";
$inf_developer = "karrak";
$inf_email = "admin@fusionhu.com";
$inf_weburl = "https://fusionhu.com";
$inf_folder = "random_avatar_panel";
$inf_image = "random_avatar.png";

$inf_newtable[] = DB_RA_AVATAR." (
    avatar_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT(11) NOT NULL DEFAULT '0',
    rating INT(11) NOT NULL DEFAULT '0',
    voting_id INT(11) NOT NULL DEFAULT '0',
    avatar_language VARCHAR(50) NOT NULL DEFAULT '".LANGUAGE."',
    PRIMARY KEY (avatar_id)
) ENGINE=MyISAM DEFAULT CHARSET=UTF8 COLLATE=utf8_unicode_ci";

$inf_insertdbrow[] = DB_PANELS." (panel_name, panel_filename, panel_content, panel_side, panel_order, panel_type, panel_access, panel_display, panel_status, panel_url_list, panel_restriction, panel_languages) VALUES('".$inf_title."', '".$inf_folder."', '', '4', '3', 'file', '0', '1', '1', '', '3', '".fusion_get_settings('enabled_languages')."')";

$inf_mlt[] = [
    'title'  => $inf_title,
    'rights' => "RAP"
];

if (!column_exists('users', 'user_randavatar')) {
    $inf_altertable[] = DB_USERS." ADD user_randavatar INT(11) NOT NULL DEFAULT 0";
    $last_category = dbresult(dbquery("SELECT MAX(field_cat_id) FROM ".DB_USER_FIELD_CATS), 0);
    $inf_insertdbrow[] = DB_USER_FIELDS." (field_title, field_name, field_cat, field_type, field_order) VALUES ('".$locale['RAP_uf']."', 'user_randavatar', ".$last_category.", 'file', 2)";
}

$enabled_languages = makefilelist(LOCALE, ".|..", TRUE, "folders");
if (!empty($enabled_languages)) {
    foreach ($enabled_languages as $language) {
        if (file_exists(RAP_PATH.'locale/'.$language.'/ravp.php')) {
            include_once RAP_PATH.'locale/'.$language.'/ravp.php';
        } else {
            include_once RAP_PATH.'locale/Hungarian/ravp.php';
        }

        $mlt_adminpanel[$language][] = [
            'rights'   => "RAP",
            'image'    => $inf_image,
            'title'    => $locale['RAP_02'],
            'panel'    => "admin.php",
            'page'     => 5,
            'language' => $language
        ];

        // Delete
        $mlt_deldbrow[$language][] = DB_RA_AVATAR." WHERE avatar_language = '".$language."'";
        $mlt_deldbrow[$language][] = DB_ADMIN." WHERE admin_rights = 'RAP' AND admin_language = '".$language."'";
    }
} else {
    $inf_adminpanel[] = [
        'rights'   => "RAP",
        'image'    => $inf_image,
        'title'    => $locale['RAP_02'],
        'panel'    => "admin.php",
        'page'     => 5,
        'language' => LANGUAGE
    ];
}

// Uninstallation
$inf_droptable[] = DB_RA_AVATAR;
$inf_deldbrow[] = DB_ADMIN." WHERE admin_rights = 'RAP'";
$inf_deldbrow[] = DB_PANELS." WHERE panel_filename = '".$inf_folder."'";
$inf_deldbrow[] = DB_LANGUAGE_TABLES." WHERE mlt_rights = 'RAP'";

if (column_exists('users', 'user_randavatar')) {
    $inf_dropcol[] = ['table' => DB_USERS, 'column' => 'user_randavatar'];
    $inf_deldbrow[] = DB_USER_FIELDS." WHERE field_name = 'user_randavatar'";
}
