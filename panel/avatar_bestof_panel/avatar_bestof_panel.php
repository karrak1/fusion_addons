<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: avatar_bestof_panel
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
(defined('IN_FUSION') || exit);

$locale = fusion_get_locale("", ABOP_LOCALE);

if (check_post("saverating")) {
    $welcpmsettings = [
        'user_id'              => form_sanitizer($_POST['user_id'], '', 'user_id'),
        'rating'               => form_sanitizer($_POST['saverating'], '', 'saverating'),
        'voting_id'            => fusion_get_userdata('user_id'),
        'avatar_best_language' => LANGUAGE
    ];
    if (\defender::safe()) {
        $result = dbquery("SELECT * FROM ".DB_AVATAR_BEST." WHERE user_id = :userid AND voting_id = :votingid", [':userid' => $welcpmsettings['user_id'], ':votingid' => $welcpmsettings['voting_id']]);
        dbquery_insert(DB_AVATAR_BEST, $welcpmsettings, (dbrows($result) == 0 ? 'save' : 'update'));
    }
}

$lk=""; $kor=0;

openside($locale['ABOP_05']);
$randuser = dbarray(dbquery("SELECT *
    FROM ".DB_USERS."
    WHERE user_avatar != ''
    ORDER BY RAND()
"));
echo "<div class='panel panel-default'>";
echo "<div class='text-center'><b>".$locale['ABOP_06']."</b></div>";
echo "<div class='text-center'>".showdate("%Y.%m.%d.-%H:%M", $randuser['user_joined'])."</div>";
echo "<div class='text-center'>".display_avatar($randuser, '100px', '', TRUE, 'img-rounded')."</div>";

$userlocation = column_exists(DB_USERS, 'user_location');
if ($userlocation) {
    $loc = ($randuser['user_location'] ? sprintf($locale['ABOP_07'], ucfirst($randuser['user_location'])) : '');
}

if ($randuser['user_birthdate'] != "0000-00-00") {
    $kor = showdate('%Y', time())-substr($randuser['user_birthdate'], 0, 4)." ".$locale['ABOP_08'];
} else {
    $kor ="";
}

echo "<div class='text-center'>".profile_link($randuser['user_id'], trimlink($randuser['user_name'], 12), $randuser['user_status'])."<br />".$kor."<br />".$loc."</div>";

$wb = "";
$userweb = column_exists(DB_USERS, 'user_web');
if ($userweb) {
    if ($randuser['user_web']) {
        $web = !preg_match("@^http(s)?\:\/\/@i", $randuser['user_web']) ? "http://".$randuser['user_web'] : $randuser['user_web'];
	    echo "<div class='text-center'><a href='".$web."' target='_blank' title='".$wb."'>".$locale['ABOP_09']."</a></div>";
    }
}
echo "<div class='text-center'><b>".$locale['ABOP_10']."</b><br />".showdate("%Y.%m.%d.-%H:%M", $randuser['user_lastvisit'])."</div>";

$last = (time() - $randuser['user_lastvisit']);
$lastday = sprintf("%2d", floor($last/86400));
if ($lastday > 0) {
    echo "<div class='text-center'>".sprintf($locale['ABOP_11'], $lastday)."</div>";
}

$userdata = fusion_get_userdata('user_id');
if (iMEMBER && $userdata != $randuser['user_id']) {
    echo "<div class='text-center'>";
    echo openform('saveratingform', 'post', FUSION_REQUEST);
    echo form_select('saverating', $locale['ABOP_12'], 0, [
        'inner_width' => '75%',
        'options'     => range(0, 10),
        'onchange'    => 'document.saveratingform.submit()'
    ]);
    echo form_hidden('user_id', '', $randuser['user_id']);
    echo closeform();
    echo "</div>";
}

$result = dbquery("SELECT rating, sum(rating) as rating_count FROM ".DB_AVATAR_BEST." WHERE user_id = :userid", [':userid' => $randuser['user_id']] );
$all = 0;
if (dbrows($result)) {
    $db = dbrows($result);
    while ($data = dbarray($result)) {
        $all = $data['rating_count'];
    }
    echo "<div class='text-center'>[ ".ceil($all / $db)." ] ".($db > 0 ? str_repeat("<img src='".ABOP_PATH."images/star.gif' alt='*' style='vertical-align:middle' />", ceil($all / $db)) : $locale['ABOP_13'])."</div>";
    echo "<div class='text-center'>".sprintf($locale['ABOP_14'], $db)."</div>";

    if (iMEMBER && $userdata != $randuser['user_id']) {
        $result = dbquery("SELECT * FROM ".DB_AVATAR_BEST." WHERE user_id = :userid AND voting_id = :votingid", [':userid' => $randuser['user_id'], ':votingid' => $userdata]);
        if (dbrows($result)) {
            echo "<div class='text-center'>".sprintf($locale['ABOP_15'], dbrows($result))."</div>";
        } else {
            echo "<div class='text-center'>".$locale['ABOP_16']."</div>";
        }
    }
} else {
    echo "<div class='text-center'>".$locale['ABOP_13']."</div>";
}
echo "</div>";
closeside();
