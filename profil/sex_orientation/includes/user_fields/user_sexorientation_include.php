<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_sexorientation_include_var.php
| Author: karrak
| Site: https://fusionhu.com
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
$gen_set = 1; //0 = Just text; 1 = Icon + text; 2 = text + image; 3 = Just images.
$with_secret = FALSE; // True for additiona unspecified option
$input_type = 'form_select'; // form_select or form_checkbox (up to you)
const ORIENTATION_PATH = IMAGES."user_fields/orientation".DIRECTORY_SEPARATOR;

// Definitions
$orientation_img = [
    0 => '', // Text
    1 => ['fa fa-genderless', 'fa fa-mars-double', 'fa fa-intersex', 'fa fa-transgender-alt', 'fa fa-venus-double', 'fa fa-user-secret'], // Icon
    2 => ['no', 'gay', 'hete','bise','lesbi', 'sec'],  // Image + text
    3 => ['no', 'gay', 'hete','bise','lesbi', 'sec']  // Image
];

$orientation_lc = [
    0 => $locale['uf_orientation_0'],
    1 => $locale['uf_orientation_1'],
    2 => $locale['uf_orientation_2'],
    3 => $locale['uf_orientation_3'],
    4 => $locale['uf_orientation_4'],
    5 => $locale['uf_orientation_5']
];
for ($i = 0; $i < count($orientation_lc); $i++) {
    switch ($gen_set) {

		case 5:
            $value = "<img src='".ORIENTATION_PATH.$orientation_img[$gen_set][$i].".png' style='width: 16px;' alt='".$orientation_lc[$i]."' title='".$orientation_lc[$i]."'/>";
            break;
		case 4:
            $value = "<i class='".$orientation_img[$gen_set][$i]." fa-fw fa-lg m-r-10'></i>".$orientation_lc[$i];
            break;
		case 3:
            $value = "<img src='".ORIENTATION_PATH.$orientation_img[$gen_set][$i].".png' style='width: 16px;' alt='".$orientation_lc[$i]."' title='".$orientation_lc[$i]."'/>";
            break;
        case 1:
            $value = "<i class='".$orientation_img[$gen_set][$i]." fa-fw fa-lg m-r-10'></i>".$orientation_lc[$i];
            break;
        case 2:
            $value = "<img src='".ORIENTATION_PATH.$orientation_img[$gen_set][$i].".png' style='width: 16px;' alt='".$orientation_lc[$i]."' title='".$orientation_lc[$i]."'/> ".$orientation_lc[$i];
            break;
        default:
            $value = $orientation_lc[$i];
    }
    $orientation_szkep[] = $value;
}

if (!$with_secret) {
    unset($orientation_szkep[count($orientation_szkep) - 1]);
}
// Display user field input
if ($profile_method == "input") {

    $options = [
        'type'       => 'radio',
        'inline'     => TRUE,
        'error_text' => $locale['uf_orientation_error'],
        'options'    => $orientation_szkep
    ] + $options;
    $user_fields = $input_type('user_sexorientation', $locale['uf_orientation'], $field_value, $options);

} elseif ($profile_method == "display") {
    if ($field_value) {
        $user_fields = [
            'title' => $locale['uf_orientation'],
            'value' => $orientation_szkep[$field_value]
        ];
    }
}