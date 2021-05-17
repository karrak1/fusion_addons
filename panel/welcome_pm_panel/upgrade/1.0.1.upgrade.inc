<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: 1.1.upgrade.inc
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
$inf_version = '1.0.1';

if (column_exists(DB_SHOUTBOX, 'shout_hidden', FALSE)) {
    $change_Wp = [
        'wp_active' => " CHANGE wp_active wp_active INT(1) NOT NULL DEFAULT '0'",
        'wp_sbox' => " CHANGE wp_sbox wp_sbox INT(1) NOT NULL DEFAULT '0'",
    ];

    foreach ($change_Wp as $key => $value) {
        if (column_exists(DB_WELCOME_PM, $key, FALSE)) {
            $inf_altertable[] = DB_WELCOME_PM.$value;
        }
    }
}
