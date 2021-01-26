<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.phpfusion.com/
+--------------------------------------------------------+
| Filename: user_sexorientation_include.php
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

// Variation Customization
$sex_set = defined('UF_SEX_SET') ? UF_SEX_SET : 1; // 0 = Just text; 1 = Icon + text; 2 = text + image; 3 = Just images.
$sex_secret = defined('UF_SEX_SECRET') ? UF_SEX_SECRET : FALSE; // Set true for additional unspecified option
$input_type = 'form_select'; // form_select or form_checkbox (up to you)
const ORIENTATION_PATH = IMAGES."user_fields/sexorientation".DIRECTORY_SEPARATOR;

// Definitions
$img = [
    '0' => '', // Text
    '1' => ['fa fa-genderless', 'fa fa-mars-double', 'fa fa-intersex', 'fa fa-transgender-alt', 'fa fa-venus-double', 'fa fa-user-secret'], // Icon
    '2' => ['no', 'gay', 'hete','bise','lesbi', 'sec'],  // Image + text
    '3' => ['no', 'gay', 'hete','bise','lesbi', 'sec']  // Image
];

$sex_options = [
    0 => $locale['uf_orientation_0'],
    1 => $locale['uf_orientation_1'],
    2 => $locale['uf_orientation_2'],
    3 => $locale['uf_orientation_3'],
    4 => $locale['uf_orientation_4'],
    5 => $locale['uf_orientation_5']
];
$sex_opts = [];

for ($i = 0; $i < count($sex_options); $i++) {
    switch ($sex_set) {

		case 5:
            $value = "<img src='".ORIENTATION_PATH.$img[$sex_set][$i].".png' style='width: 16px;' alt='".$sex_options[$i]."' title='".$sex_options[$i]."'/>";
            break;
		case 4:
            $value = "<i class='".$img[$sex_set][$i]." fa-fw fa-lg m-r-10'></i>".$sex_options[$i];
            break;
		case 3:
            $value = "<img src='".ORIENTATION_PATH.$img[$sex_set][$i].".png' style='width: 16px;' alt='".$sex_options[$i]."' title='".$sex_options[$i]."'/>";
            break;
        case 1:
            $value = "<i class='".$img[$sex_set][$i]." fa-fw fa-lg m-r-10'></i>".$sex_options[$i];
            break;
        case 2:
            $value = "<img src='".ORIENTATION_PATH.$img[$sex_set][$i].".png' style='width: 16px;' alt='".$sex_options[$i]."' title='".$sex_options[$i]."'/> ".$sex_options[$i];
            break;
        default:
            $value = $sex_options[$i];
    }
    $sex_opts[] = $value;
}

// Display user field input
if ($profile_method == "input") {
    if (!$sex_secret) {
        unset($sex_opts[count($sex_opts) - 1]);
    }


    $options = [
        'type'       => 'radio',
        'inline'     => TRUE,
        'error_text' => $locale['uf_orientation_error'],
        'options'    => $sex_opts
    ] + $options;
    $user_fields = $input_type('user_sexorientation', $locale['uf_orientation'], $field_value, $options);

} else if ($profile_method == "display") {
    if ($field_value) {
        $user_fields = [
            'title' => $locale['uf_orientation'],
            'value' => $sex_opts[$field_value]
        ];
    }
}
