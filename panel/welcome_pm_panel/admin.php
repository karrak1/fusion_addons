<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
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
require_once __DIR__.'/../../maincore.php';
require_once THEMES."templates/admin_header.php";

pageAccess("WPM");

$locale = fusion_get_locale("", WPM_LOCALE);

\PHPFusion\BreadCrumbs::getInstance()->addBreadCrumb(['link'  => WPM_PATH.'admin.php'.fusion_get_aidlink(), 'title' => $locale['WPM_002']]);

$settings = dbarray(dbquery("SELECT * FROM ".DB_WELCOME_PM.(multilang_table("WPM") ? " WHERE ".in_group('wp_language', LANGUAGE) : '')));

if (check_post("savesettings")) {
    $settings = [
        'wp_id'       => sanitizer('wp_id', 0, 'wp_id'),
        'wp_userid'   => sanitizer('wp_userid', 0, 'wp_userid'),
        'wp_active'   => post('wp_active') ? 1 : 0,
        'wp_sbox'     => post('wp_sbox') ? 1 : 0,
        'wp_language' => LANGUAGE
    ];

    dbquery_insert(DB_WELCOME_PM, $settings, 'update');
    addNotice("success", $locale['WPM_008']);
    redirect(FUSION_REQUEST);
}
$userlist = [];
$result = dbquery("SELECT user_id, user_name, user_level
    FROM ".DB_USERS."
    WHERE user_level <= :userlevel
    ORDER BY user_level DESC, user_name", [':userlevel' => USER_LEVEL_ADMIN]
);
if (dbrows($result) > 0) {
    while ($data = dbarray($result)) {
        $userlist[$data['user_id']] = $data['user_name'];
    }
}

opentable($locale['WPM_009']);
	echo"<div class='well m-t-10'>".$locale['WPM_001']."</div>\n";
    echo openform('settingsform', 'post', FUSION_REQUEST, ['max_tokens' => 1]);
    echo form_hidden('wp_id', '', $settings['wp_id']);
    echo form_select('wp_userid', $locale['WPM_014'], $settings['wp_userid'], [
        'required'    => TRUE,
        'options'     => $userlist,
        'placeholder' => $locale['choose'],
        'allowclear'  => TRUE
    ]);
    echo form_checkbox('wp_active', $locale['WPM_010'], $settings['wp_active'], [
        'toggle' => TRUE
    ]);
    echo form_checkbox('wp_sbox', $locale['WPM_013'], $settings['wp_sbox'], [
        'toggle' => TRUE
    ]);
    echo form_button('savesettings', $locale['save'], $locale['save'], ['class' => 'btn-success']);
    echo closeform();

require_once THEMES."templates/footer.php";
