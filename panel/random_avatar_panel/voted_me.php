<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: voted_me.php
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
require_once __DIR__."/../../maincore.php";
if (!defined('RANDOM_AVATAR_PANEL_EXIST')) {
    redirect(BASEDIR."error.php?code=404");
}
require_once THEMES."templates/header.php";
require_once RAP_PATH."autoload.php";
\PHPFusion\Rap\RapStat::getInstance()->Display();

require_once THEMES."templates/footer.php";

/*
require_once __DIR__."/../../maincore.php";
if (!defined('AVATAR_BESTOF_PANEL_EXIST')) {
    redirect(BASEDIR."error.php?code=404");
}
require_once THEMES."templates/header.php";
$locale = fusion_get_locale("", ABOP_LOCALE);

$user = fusion_get_userdata('user_id');
$result = dbquery("SELECT ab.*, tu.user_id, tu.user_name, tu.user_status, tu.user_avatar, tu.user_joined, tu.user_level
    FROM ".DB_AVATAR_BEST." AS ab
    LEFT JOIN ".DB_USERS." AS tu ON tu.user_id = ab.voting_id
    WHERE ab.user_id = :voted
    ORDER BY rating DESC", [':voted' => $user]);
$all = dbrows($result);

if ($all > 0) {
    opentable($locale['RAP_050']);
    echo "<div class='text-center'>".sprintf($locale['RAP_051'], $all)."</div>";
    echo "<div class='table-responsive'><table class='table table-hover table-striped'>\n";
    echo "<thead>\n";
    echo "<tr>\n";
    echo "<th>".$locale['RAP_052']."</th>\n";
    echo "<th>".$locale['RAP_053']."</th>\n";
    echo "<th>&nbsp;&nbsp;</th>\n";
    echo "<th>".$locale['RAP_052']."</th>\n";
    echo "<th>".$locale['RAP_053']."</th>\n";
    echo "<th>&nbsp;&nbsp;</th>\n";
    echo "</tr>\n";
    echo "</thead>\n";
    echo "<tbody>\n";
    echo "<tr>\n";
    $li = 0;
    while ($kik = dbarray($result)) {
        echo "<td class='text-left'><a href='".BASEDIR."messages.php?msg_send=".$kik['user_id']."'><i class='fa fa-envelope-o fa-lg fa-fw'></i></a> ".$kik['user_name']."</td>\n";
        echo "<td class='text-center'>".$kik['rating']."</td>\n";
        echo "<td>&nbsp;</td>\n";
        $li ++;
        if ($li > 1) {
            echo "</tr>\n<tr>\n";
            $li = 0;
        }
    }
    echo "</tr>\n";
    echo "</tbody>\n";
    echo "</table>\n";
    echo "</div>";
    echo "<div class='text-center'>".$locale['RAP_054']."</div>";
    closetable();
} else {
    opentable($locale['RAP_050']);
    echo "<div class='text-center'>".$locale['RAP_055']."</div>";
    closetable();
}
require_once THEMES."templates/footer.php";
*/