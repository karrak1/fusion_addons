<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
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
(defined('IN_FUSION') || exit);

\PHPFusion\Admins::getInstance()->setAdminPageIcons("RAP", "<i class='admin-ico fa fa-fw fa-commenting'></i>");

const RAP_PATH = INFUSIONS."random_avatar_panel".DIRECTORY_SEPARATOR;
define("RMD_IMG", "<i class='fa fa-star fa-xs fa-fw'></i>"); //"<i class='fa fa-star fa-xs fa-fw'></i>" or "<img src='".RAP_PATH."images/star.gif' alt='*' style='vertical-align:middle' />"
define("RMD_PM", TRUE); //TRUE or FALSE

if (!defined("DB_RA_AVATAR")) {
	define("DB_RA_AVATAR", DB_PREFIX."rand_avatar");
}

if (!defined("RAP_LOCALE")) {
    if (file_exists(RAP_PATH."locale/".LOCALESET."ravp.php")) {
        define("RAP_LOCALE", RAP_PATH."locale/".LOCALESET."ravp.php" );
    } else {
        define("RAP_LOCALE", RAP_PATH."locale/Hungarian/ravp.php" );
    }
}
