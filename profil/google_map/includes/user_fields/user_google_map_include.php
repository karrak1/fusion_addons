<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_google_map_include_var.php
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

$icon = "<img src='".IMAGES."user_fields/social/map.svg' title='".$locale['uf_google_map']."' alt='".$locale['uf_google_map']."'/>";
//Display user field input
if ($profile_method == "input") {
    $options = [
        'inline'      => TRUE,
        'max_length'  => 100,
        'placeholder' => $locale['uf_google_map_placeholder'],
        'error_text'  => $locale['uf_google_map_error'],
        'label_icon'  => $icon
    ] + $options;
    $user_fields = form_text('user_google_map', $locale['uf_google_map'], $field_value, $options);

    //Display in profile
} else if ($profile_method == "display") {
    if ($field_value) {
        $field_value = "<p>".(fusion_get_settings('index_url_userweb') ? "" : "<!--noindex-->")."<a href='http://hu.wikipedia.org/wiki/".ucfirst($field_value)."' title='".ucfirst($field_value)."' ".(fusion_get_settings('index_url_userweb') ? "" : "rel='nofollow noopener noreferrer' ")."target='_blank'>".ucfirst($field_value)."</a>".(fusion_get_settings('index_url_userweb') ? "" : "<!--/noindex-->")."</p>"
        ."<iframe width='390' height='320' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://maps.google.co.uk/maps?f=d&amp;source=s_d&amp;saddr=".ucfirst($field_value)."&amp;output=embed'></iframe>";
    }

    $user_fields = [
        'icon'  => $icon,
        'title' => $locale['uf_google_map'],
        'value' => $field_value ?: ''
    ];
}
