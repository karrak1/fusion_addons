<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: templates/random_avatar.tpl.php
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

if (!function_exists("displayRap")) {
    function displayRap($info) {
        $locale = fusion_get_locale("", RAP_LOCALE);
        openside($locale['RAP_05']);
        echo "<div class='text-center m-t-10'>".$info['join']."</div>";
        echo "<div class='clearfix'>";
            echo"<div class='text-center'>";
                echo "<div class='spacer-xs'>".$info['avatar']."</div>";
                echo "<div class='spacer-xs'><span>".$info['profile']."</span></div>";
                echo "<div class='row'>";
                    echo "<div class='m-t-10'>".$info['location']."</div>";
                    echo "<div class='m-t-10'>".$info['birthdate']."</div>";
                    echo "<div class='m-t-10'><a href='".$info['web']."'>".$info['web']."</a></div>";
                    echo "<div class='m-t-10'>".$info['lastvisit']."</div>";
                    echo "<div class='m-t-10'>".$info['lastday']."</div>";
                    if (!empty($info['message']['item'])) {
                        echo "<div class='m-t-10'>".$info['message']['item']['image']."</div>";
                        echo "<div class='m-t-10'>".$info['message']['item']['vote']."</div>";
                        echo "<div class='m-t-10'>".$info['message']['item']['rate']."</div>";
                    }
                    if (!empty($info['buton'])) {
                        echo openform('saveratingform', 'post', FUSION_REQUEST, ['max_tokens' => 1]);
                        echo "<div class='spacer-xs'><strong>".$info['buton']['selectrap']."</strong></div>";
                        echo $info['buton']['hiderap'];
                        closeform();
                    }
                    echo "<div class='spacer-xs'>".$locale['RAP_17']."</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        closeside();
    }
}

if (!function_exists("DisplayStat")) {
    function DisplayStat($info) {
        $locale = fusion_get_locale("", RAP_LOCALE);
        opentable($locale['RAP_050']);
        if (!empty($info['pagenav'])) {
            echo "<div class='clearfix'>";
            echo "<div class='spacer-sm'>";
            echo "<div class='pull-right'>".$info['pagenav']."</div>";
            echo "</div>";
            echo "</div>";
        }
    echo "<div class='text-center'>".sprintf($locale['RAP_051'], $info['all'])."</div>";
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
    foreach ($info['stat'] as $tag_id => $kik) {
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
/*} else {
    opentable($locale['RAP_050']);
    echo "<div class='text-center'>".$locale['RAP_055']."</div>";
    closetable();
}*/
    }
}
