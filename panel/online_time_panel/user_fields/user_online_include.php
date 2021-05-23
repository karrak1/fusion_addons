<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: user_fields/user_online_include.php
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

if ($profile_method == "input") {

    if (defined('ADMIN_PANEL')) { // To show in admin panel only.
        $user_fields = "<div class='well m-t-5 text-center'>".$locale['uf_online']."</div>";
    } else {

        $options = [
            'inline' => true
        ] + $options;

        $user_fields = form_hidden('user_online', '', $field_value, $options);
	}
} elseif ($profile_method == "display") {
    if ($field_value) {
        $user_fields = [
            'title' => $locale['uf_online'],
            'value' => countdown(($field_value + time()))
        ];
    }
}
