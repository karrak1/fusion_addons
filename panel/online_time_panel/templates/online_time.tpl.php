<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: templates/onlie_time.tpl.php
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

if (!function_exists("displayOnlineTime")) {
    function displayOnlineTime($info) {
        if (!empty($info['stat_rows'])) {
            $locale = fusion_get_locale("", OTPI_LOCALE);
            openside($locale['OTPI_010']);
            echo "<div class='row'>";
            echo "<div class='text-center'>".sprintf($locale['OTPI_012'], $info['limit'])."</div>";
            echo "<div class='clearfix m-r-20 text-center'>";
            echo "<marquee behavior='scroll' align='center' valign='bottom' direction='up' width='120' height='120' scrollamount='2' scrolldelay='90' onmouseover='this.stop()' onmouseout='this.start()'>";
            if (!empty($info['stat'])) {
                $i=1;
                foreach ($info['stat'] as $data) {
                    $ustime = (time() - $data['user_lastvisit']);
                    $lastseen = "<span><img src='".OTPI_CLASS."images/".($ustime < 120 ? 'user_online.gif' : 'user_offline.gif')."' height='13px' width='13px'></span>";
                    echo "[ ".(fusion_get_userdata('user_id') == $data['user_id'] ? "<span class='required'>".$i."</span>" : $i)." ] ";
                    echo profile_link($data['user_id'], ucfirst($data['user_name']), $data['user_status']).$lastseen."<br />".display_avatar($data, '50px', '', TRUE, 'img-rounded');
                    echo "<p>".timer((time()-$data['user_online']))."</p>";
                    $i++;
                }
            }
            echo "</marquee>";
            echo "</div>";
            echo "</div>";
            echo "<div class='text-center'>".$locale['OTPI_014']."</div>";
            closeside();
        }
    }
}

if (!function_exists("DisplayStat")) {
    function DisplayStat($info) {
        $locale = fusion_get_locale("", OTPI_LOCALE);
        opentable("<i class='fa fa-pie-chart fa-lg m-r-10'></i>".$locale['OTPI_011']);
        echo "<div class='table-responsive m-t-20'>";
        echo "<table class='table table-hover table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th><small><strong>".$locale['OTPI_015']."</strong></small></th>";
        echo "<th><small><strong>".$locale['OTPI_016']."</strong></small></th>";
        echo "<th><small><strong>".$locale['OTPI_017']."</strong></small></th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        if (!empty($info['statall'])) {
            $ii = 0;
            foreach ($info['statall'] as $tag_id => $tag_data) {
                $ii++;
                echo "<tr>";
                echo "<td>".(fusion_get_userdata('user_id') == $tag_data['user_id'] ? "<span class='required'>".$ii."</span>" : $ii)."</span></td>";
                echo "<td><div class='clearfix'><div class='pull-left m-r-10'>".display_avatar($tag_data, '50px', '', TRUE, 'img-rounded')."</div>";
                echo "<div class='overflow-hide'><span class='m-l-10 m-r-10'>".profile_link($tag_data['user_id'], $tag_data['user_name'], $tag_data['user_status'])."</span></div></div></td>";
                echo "<td>".timer((time() - $tag_data['user_online']))."</td>";
                echo "</tr>";
            }
        } else {
            echo "<div class='well text-center'>".$locale['OTPI_013']."</div>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        if (!empty($info['pagenav'])) {
            echo "<div class='text-right'>".$info['pagenav']."</div>";
        }

        closetable();
    }
}
