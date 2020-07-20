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

//Admin icon megjelenítése
\PHPFusion\Admins::getInstance()->setAdminPageIcons("WPM", "<i class='admin-ico fa fa-fw fa-commenting'></i>");

const WPM_PATH = INFUSIONS."welcome_pm_panel".DIRECTORY_SEPARATOR;

if (!defined("DB_WELCOME_PM")) {
	define("DB_WELCOME_PM", DB_PREFIX."welcome_pm");
}

if (!defined("WPM_LOCALE")) {
    if (file_exists(WPM_PATH."locale/".LOCALESET."wpm.php")) {
        define("WPM_LOCALE", WPM_PATH."locale/".LOCALESET."wpm.php");
    } else {
        define("WPM_LOCALE", WPM_PATH."locale/Hungarian/wpm.php");
    }
}
