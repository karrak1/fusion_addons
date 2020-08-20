<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: points_panel/admin.php
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
namespace PHPFusion\Points;
require_once "../../maincore.php";
require_once THEMES."templates/admin_header.php";

use \PHPFusion\BreadCrumbs;

class PointsAdmin extends PointsModel {
    private $allowed_section = ['settings', 'autogroup', 'bank', 'diary', 'pointst', 'bann'];

    public function __construct() {
        pageAccess('PSP');
        self::$locale = fusion_get_locale('', POINT_LOCALE);
    }

    public function DisplayAdmin() {

        BreadCrumbs::getInstance()->addBreadCrumb(['link' => INFUSIONS.'points_panel/admin.php'.fusion_get_aidlink(), 'title' => self::$locale['PSP_M00']]);
        add_to_title(self::$locale['PSP_M00']);
        opentable(self::$locale['PSP_M00']);

    	$section = get('section', FILTER_DEFAULT);
        $section = isset($section) && in_array($section, $this->allowed_section) ? $section : $this->allowed_section[0];

        $tab = [
            'title' => [
                0 => self::$locale['PSP_M06'],
                1 => self::$locale['PSP_M07'],
                2 => self::$locale['PSP_M08'],
                3 => self::$locale['PSP_M09'],
                4 => self::$locale['PSP_M10'],
                5 => self::$locale['PSP_M11']
            ],
            'id'    => $this->allowed_section,
            'icon'  => [
                0 => $this->points_icons[$this->allowed_section[0]],
                1 => $this->points_icons[$this->allowed_section[1]],
                2 => $this->points_icons[$this->allowed_section[2]],
                3 => $this->points_icons[$this->allowed_section[3]],
                4 => $this->points_icons[$this->allowed_section[4]],
                5 => $this->points_icons[$this->allowed_section[5]]
            ]
        ];

        echo opentab($tab, $section, 'points_admin', TRUE, '', 'section', ['points_user', 'rowstart', 'log_pmod', 'bank', 'ref', 'ban_id']);
        switch ($section) {
            case "diary":
                \PHPFusion\Points\PointsDiaryAdmin::getInstance()->displayDiaryAdmin();
                break;
            case "autogroup":
                \PHPFusion\Points\PointsAutogroupAdmin::getInstance()->displayAdmin();
                break;
            case "bank":
                \PHPFusion\Points\PointsBankAdmin::getInstance()->displayAdmin();
                break;
            case "pointst":
                \PHPFusion\Points\PointsPointsAdmin::getInstance()->displayPointsAdmin();
                break;
            case "bann":
                \PHPFusion\Points\PointsBanAdmin::getInstance()->CurrentList();
                break;
            default:
                \PHPFusion\Points\PointsSettingsAdmin::getInstance()->displayPointsAdmin();
        }
        echo closetab();
        closetable();
    }
}
$vid = new PointsAdmin();
$vid->DisplayAdmin();

require_once THEMES."templates/footer.php";
