<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_hobby_include.php
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
    require_once INCLUDES."bbcode_include.php";

    $options = [
        'inline'      => TRUE,
        'bbcode'      => TRUE,
        'error_text'  => $locale['uf_hobby_error'],
        'placeholder' => $locale['uf_hobby_placeholder'],
        'form_name'   => 'userfieldsform'
    ] + $options;

    $user_fields = form_textarea('user_hobby', $locale['uf_hobby'], $field_value, $options);

} else if ($profile_method == "display") {
    if ($field_value) {
        $user_fields = [
            'title' => $locale['uf_hobby'],
            'value' => $field_value ? parse_textarea($field_value, TRUE, TRUE, FALSE, NULL, TRUE) : ''
        ];
    }
}
