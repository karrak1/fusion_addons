<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: templates.php
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

if (!function_exists('displayOnlineTime')) {
    function displayOnlineTime($info) {
        if (!empty($info['stat_rows'])) {
            $html = \PHPFusion\Template::getInstance('otimepanelform');
            $html->set_template(__DIR__.'/templates/panel.html');
            $locale = fusion_get_locale();
            $html->set_locale($locale);

            $html->set_tag('openside', fusion_get_function('openside', $info['opentable']));
            $html->set_tag('closeside', fusion_get_function('closeside'));

            $html->set_tag('head', sprintf($locale['OTPI_012'], $info['limit']));

            if (!empty($info['stat'])) {
                $i=1;
                foreach ($info['stat'] as $data) {
                    $ustime = (time() - $data['user_lastvisit']);
                    $lastseen = "<span style='white-space: nowrap;'><img src='".OTPI_CLASS."images/".($ustime < 120 ? 'user_online.gif' : 'user_offline.gif')."' height='13px' width='13px'></span>";

                    $html->set_block('stat', [
                        'place' => "[ ".(fusion_get_userdata('user_id') == $data['user_id'] ? "<span class='required'>".$i."</span>" : $i)." ] ",
                        'name'  => profile_link($data['user_id'], ucfirst($data['user_name']), $data['user_status']).$lastseen."<br />".display_avatar($data, '50px', '', TRUE, 'img-rounded'),
                        'date'  => "<p>".timer((time()-$data['user_online']))."</p>\n"
                    ]);
                    $i++;
                }
            }
            echo $html->get_output();
        }
    }
}
if (!function_exists("DisplayStat")) {
    function DisplayStat($info) {
        $html = \PHPFusion\Template::getInstance('statform');
        $html->set_template(__DIR__.'/templates/stat.html');
        $locale = fusion_get_locale();
        $html->set_locale($locale);
        $html->set_tag('opentable', fusion_get_function('opentable', $info['opentable']));
        $html->set_tag('closetable', fusion_get_function('closetable'));

        if (!empty($info['pagenav'])) {
            $html->set_block('pagenav', ['pagenav' => $info['pagenav']]);
        }

        if (!empty($info['statall'])) {
            $ii = 0;
            foreach ($info['statall'] as $tag_id => $tag_data) {
                $ii++;
                $html->set_block('statall_block', [
                    'name'   => profile_link($tag_data['user_id'], $tag_data['user_name'], $tag_data['user_status']),
                    'avatar' => display_avatar($tag_data, '50px', '', TRUE, 'img-rounded'),
                    'place'  => (fusion_get_userdata('user_id') == $tag_data['user_id'] ? "<span class='required'>".$ii."</span>" : $ii),
                    'date'   => timer((time() - $tag_data['user_online']))
                ]);
            }
        } else {
            $html->set_block('no_tag', ['message' => $locale['OTPI_013']]);
        }

        echo $html->get_output();
    }
}
