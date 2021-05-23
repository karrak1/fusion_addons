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
require_once "../../maincore.php";
require_once THEMES."templates/admin_header.php";
pageAccess('OTPI');

$locale = fusion_get_locale("", OTPI_LOCALE);

\PHPFusion\BreadCrumbs::getInstance()->addBreadCrumb(['link' => OTPI_CLASS.'admin.php'.fusion_get_aidlink(), 'title' => $locale['OTPI_010']]);
add_to_title($locale['OTPI_010']);
$inf_settings=get_settings('online_time_panel');

opentable($locale['OTPI_020']);

if (check_post('savetime')) {
    $inputData = [
        'online_time'  => sanitizer('online_time', 300, 'online_time'),
        'online_limit' => sanitizer('online_limit', 1, 'online_limit'),
        'online_page'  => sanitizer('online_page', 1, 'online_page')
    ];

    if (\defender::safe()) {
        foreach ($inputData as $settings_name => $settings_value) {
            $inputSettings = [
                'settings_name'  => $settings_name,
                'settings_value' => $settings_value,
                'settings_inf'   => 'online_time_panel'
            ];

            dbquery_insert(DB_SETTINGS_INF, $inputSettings, 'update', ['primary_key' => 'settings_name']);
            addNotice("success", $locale['OTPI_021']);
            redirect(FUSION_REQUEST);
        }
	}
}

echo openform('netimeform', 'post', FUSION_REQUEST);
echo form_text('online_time', $locale['OTPI_022'], $inf_settings['online_time'], [
    'required'    => TRUE,
    'inline'      => TRUE,
    'type'        => 'number',
    'inner_width' => '100px',
    'ext_tip'     => $locale['OTPI_023'],
    'max_length'  => 5
]);

echo form_text('online_limit', $locale['OTPI_024'], $inf_settings['online_limit'], [
    'required'    => TRUE,
    'inline'      => TRUE,
    'type'        => 'number',
    'inner_width' => '100px',
    'ext_tip'     => $locale['OTPI_025'],
    'max_length'  => 5
]);

echo form_text('online_page', $locale['OTPI_026'], $inf_settings['online_page'], [
    'required'    => TRUE,
    'inline'      => TRUE,
    'type'        => 'number',
    'inner_width' => '100px',
    'max_length'  => 5
]);

echo form_button('savetime', $locale['OTPI_027'], $locale['OTPI_027'], ['class' => 'btn-primary']);
echo closeform();
closetable();
require_once THEMES."templates/footer.php";
