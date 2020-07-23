<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_avatarbestof_include.php
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
require_once(INFUSIONS.'avatar_bestof_panel/user_fields/user_avatarbestof_include.php');

// Display user field input
if ($profile_method == "input") {
    $yesno = [0 => $locale['yes'], 1 => $locale['no']];
	$options = [
        'inline'     => TRUE,
        'tip'        => $locale['uf_avatarbestof_tip'],
        'options'    => $yesno,
        'width'      => '150px',
        'error_text' => $locale['uf_avatarbestof_error']
    ] + $options;
	$user_fields = form_select('user_avatarbestof', $locale['uf_avatarbestof'], $field_value, $options);
// Display in profile
} elseif ($profile_method == "display") {
    $lookup = get("lookup", FILTER_VALIDATE_INT);
    if (iMEMBER && (fusion_get_userdata('user_id') != $lookup) && $field_value == 0) {
        $action_url = FUSION_SELF.(FUSION_QUERY ? "?".FUSION_QUERY : "");
        if (check_post("saveratingfield")) {
            $save_avatar = [
                'user_id'              => $lookup,
                'rating'               => form_sanitizer($_POST['saveratingfield'], '', 'saveratingfield'),
                'voting_id'            => fusion_get_userdata('user_id'),
                'avatar_best_language' => LANGUAGE
            ];
            if (\defender::safe()) {
                $result = dbquery("SELECT * FROM ".DB_AVATAR_BEST." WHERE user_id = :userid AND voting_id = :votingid", [':userid' => $lookup, ':votingid' => fusion_get_userdata('user_id')]);
                dbquery_insert(DB_AVATAR_BEST, $save_avatar, (dbrows($result) == 0 ? 'save' : 'update'));
            }
        }
        $result = dbquery("SELECT rating, sum(rating) as rating_count FROM ".DB_AVATAR_BEST." WHERE user_id = :userid", [':userid' => $lookup] );
        $all = 0;
        $avinf = "";

        if (dbrows($result)) {
            $db = dbrows($result);
            while ($data = dbarray($result)) {
                $all = $data['rating_count'];
            }
            $avinf = "<div class='text-center'>[ ".ceil($all / $db)." ] ".($db > 0 ? str_repeat("<img src='".ABOP_PATH."images/star.gif' alt='*' style='vertical-align:middle' />", ceil($all / $db)) : '')."</div>";
        }

        $user_fields = [
            'title' => $locale['uf_avatarbestof_0'],
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
