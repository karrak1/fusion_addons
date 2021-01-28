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
(defined('IN_FUSION') || exit);

$locale = fusion_get_locale("", CLOUD_LOCALE);

// Infusion general information
$inf_title = $locale['CLOUD_00'];
$inf_description = $locale['CLOUD_01'];
$inf_version = "1.0";
$inf_developer = "karrak";
$inf_email = "admin@fusionhu.com";
$inf_weburl = "https://fusionhu.com";
$inf_folder = "cloud_panel";
$inf_image = "cloud.png";

$inf_mlt[] = [
    'title'  => $inf_title,
    'rights' => "CLUD"
];

$inf_insertdbrow[] = DB_PANELS." (panel_name, panel_filename, panel_content, panel_side, panel_order, panel_type, panel_access, panel_display, panel_status, panel_url_list, panel_restriction, panel_languages) VALUES ('".$inf_title."', '".$inf_folder."', '', '4', '3', 'file', '0', '1', '1', '', '3', '".fusion_get_settings('enabled_languages')."')";

$enabled_languages = makefilelist(LOCALE, ".|..", TRUE, "folders");
if (!empty($enabled_languages)) {
    foreach($enabled_languages as $language) {
        if (file_exists(CLOUD_PATH.'locale/'.$language.'/cloud.php')) {
            include CLOUD_PATH.'locale/'.$language.'/cloud.php';
        } else {
            include CLOUD_PATH.'locale/Hungarian/cloud.php';
        }

        $mlt_adminpanel[$language][] = [
            'rights'   => "CLUD",
            'image'    => $inf_image,
            'title'    => $locale['CLOUD_02'],
            'panel'    => "admin.php",
            'page'     => 5,
            'language' => $language
        ];
        $mlt_deldbrow[$language][] = DB_ADMIN." WHERE admin_rights = 'CLUD' AND admin_language = '".$language."'";
    }
} else {
    $inf_adminpanel[] = [
        'rights'   => "CLUD",
        'image'    => $inf_image,
        'title'    => $locale['CLOUD_02'],
        'panel'    => "admin.php",
        'page'     => 5,
        'language' => LANGUAGE
    ];
}

$inf_deldbrow[] = DB_PANELS." WHERE panel_filename = '".$inf_folder."'";
$inf_deldbrow[] = DB_ADMIN." WHERE admin_rights = 'CLUD'";
$inf_deldbrow[] = DB_LANGUAGE_TABLES." WHERE mlt_rights = 'CLUD'";
