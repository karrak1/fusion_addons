<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: admin.php
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
require_once "../../maincore.php";
require_once THEMES."templates/admin_header.php";

pageAccess("WPM");

$locale = fusion_get_locale("", WPM_LOCALE);

$welcpmsettings = dbarray(dbquery("SELECT * FROM ".DB_WELCOME_PM.(multilang_table("WPM") ? " WHERE ".in_group('wp_language', LANGUAGE) : '')));

if (check_post("savesettings")) {
    $welcpmsettings = [
        'wp_id'     => form_sanitizer($_POST['wp_id'], '', 'wp_id'),
        'wp_active' => isset($_POST['wp_active']) ? $_POST['wp_active'] : 0
    ];
    if (check_post("wp_sbox")) {
        $welcpmsettings += [
            'wp_sbox' => isset($_POST['wp_sbox']) ? $_POST['wp_sbox'] : 0,
        ];

    }
    dbquery_insert(DB_WELCOME_PM, $welcpmsettings, 'update');
    addNotice("success", $locale['WPM_008']);
    redirect(FUSION_REQUEST);
}

opentable($locale['WPM_009']);
	echo"<div class='well m-t-10'>".$locale['WPM_001']."</div>\n";
    echo openform('settingsform', 'post', FUSION_REQUEST, ['enctype' => TRUE]);
    echo form_hidden('wp_id', '', $welcpmsettings['wp_id']);
    echo form_select('wp_active', $locale['WPM_010'], $welcpmsettings['wp_active'], ['inline' => TRUE, 'options' => $locale['WPM_A01']]);
    echo form_select('wp_sbox', $locale['WPM_013'], $welcpmsettings['wp_sbox'], ['inline' => TRUE, 'options' => $locale['WPM_A01']]);
    echo form_button('savesettings', $locale['save'], $locale['save'], ['class' => 'btn-success']);
    echo closeform();

require_once THEMES."templates/footer.php";
