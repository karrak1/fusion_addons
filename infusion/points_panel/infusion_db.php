<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: infusion_db.php
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

//Admin icon
\PHPFusion\Admins::getInstance()->setAdminPageIcons("PSP", "<i class='admin-ico fa fa-fw fa-commenting'></i>");

/** File path const */
const POINT_CLASS = INFUSIONS."points_panel".DIRECTORY_SEPARATOR;

/** Database const */
const DB_POINT = DB_PREFIX."points";
const DB_POINT_LOG = DB_PREFIX."points_log";
const DB_POINT_ST = DB_PREFIX."points_setup";
const DB_POINT_BAN = DB_PREFIX."points_ban";
const DB_POINT_INF = DB_PREFIX."points_inf";
const DB_POINT_GROUP = DB_PREFIX."points_group";
const DB_POINT_BANK = DB_PREFIX."points_bank";
/*
if (!defined("POINT_CLASS")) {
    define("POINT_CLASS", INFUSIONS."points_panel/");
}

if (!defined("DB_POINT")) {
	define("DB_POINT", DB_PREFIX."points");
}
if (!defined("DB_POINT_LOG")) {
	define("DB_POINT_LOG", DB_PREFIX."points_log");
}
if (!defined("DB_POINT_ST")) {
	define("DB_POINT_ST", DB_PREFIX."points_setup");
}
if (!defined("DB_POINT_BAN")) {
	define("DB_POINT_BAN", DB_PREFIX."points_ban");
}
if (!defined("DB_POINT_INF")) {
	define("DB_POINT_INF", DB_PREFIX."points_inf");
}
if (!defined("DB_POINT_GROUP")) {
	define("DB_POINT_GROUP", DB_PREFIX."points_group");
}
if (!defined("DB_POINT_BANK")) {
	define("DB_POINT_BANK", DB_PREFIX."points_bank");
}
*/
//locale file
if (!defined("POINT_LOCALE")) {
    if (file_exists(POINT_CLASS."locale/".LOCALESET."points.php")) {
        define("POINT_LOCALE", POINT_CLASS."locale/".LOCALESET."points.php");
    } else {
        define("POINT_LOCALE", POINT_CLASS."locale/Hungarian/points.php");
    }
}

if (defined('POINTS_PANEL_EXIST')) {
    include_once POINT_CLASS."autoload.php";
    PHPFusion\Points\UserPoint::getInstance()->GetPoint();
}
