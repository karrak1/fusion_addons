<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_kedvenckep_include.php
| Author: Endorfin [Hungary]
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
require_once(INFUSIONS.'random_avatar_panel/user_fields/user_randavatar_include.php');

// Display user field input
if ($profile_method == "input") {
    $yesno = [0 => $locale['yes'], 1 => $locale['no']];
	$options = [
        'inline'     => TRUE,
        'tip'        => $locale['uf_randavatar_tip'],
        'options'    => $yesno,
        'width'      => '150px',
        'error_text' => $locale['uf_randavatar_error']
    ] + $options;
	$user_fields = form_select('user_randavatar', $locale['uf_randavatar'], $field_value, $options);
// Display in profile
} elseif ($profile_method == "display") {
    $lookup = get("lookup", FILTER_VALIDATE_INT);
    $voting = fusion_get_userdata('user_id');
    if (iMEMBER && ($voting != $lookup) && $field_value == 0) {
        $action_url = FUSION_SELF.(FUSION_QUERY ? "?".FUSION_QUERY : "");
        if (check_post("saveratingfield")) {
            $save_avatar = [
                'user_id'         => $lookup,
                'rating'          => form_sanitizer($_POST['saveratingfield'], '', 'saveratingfield'),
                'voting_id'       => $voting,
                'avatar_language' => LANGUAGE
            ];
            if (\defender::safe()) {
                $result = dbquery("SELECT * FROM ".DB_RA_AVATAR." WHERE user_id = :userid AND voting_id = :votingid", [':userid' => (int)$lookup, ':votingid' => (int)$voting]);
                dbquery_insert(DB_RA_AVATAR, $save_avatar, (dbrows($result) == 0 ? 'save' : 'update'));
            redirect(FUSION_REQUEST);
            }
        }
        $result = dbquery("SELECT rating, IF(SUM(rating)>0, SUM(rating), 0) AS rating_count FROM ".DB_RA_AVATAR." WHERE user_id = :userid", [':userid' => $lookup] );
        $db = dbcount("('avatar_id')", DB_RA_AVATAR, (multilang_table("ABOP") ? in_group('avatar_language', LANGUAGE)."AND " : "")."user_id = :userid", [':userid' => (int)$lookup]);
        $all = 0;
        $avinf = "";

        if (!empty($db)) {
            $data = dbarray($result);
            $avinf = "<div class='text-center'>[ ".ceil($data['rating_count'] / $db)." ] ".($db > 0 ? str_repeat(RMD_IMG, ceil($data['rating_count'] / $db)) : '')."</div>";
        }

        $user_fields = [
            'title' => $locale['uf_randavatar_0'],
            'value' => (fusion_get_user($lookup, 'user_avatar') != '' ? openform('avatarbestof_form', 'post', $action_url).
                form_select('saveratingfield', '', 0, [
                    'inner_width' => '75%',
                    'options'     => range(0, 10),
                    'onchange'    => 'document.avatarbestof_form.submit()'
                ]).
                closeform() : '').$avinf
        ];
    }
}
