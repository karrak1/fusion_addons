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

\PHPFusion\Admins::getInstance()->setAdminPageIcons("OTPI", "<i class='admin-ico fa fa-fw fa-commenting'></i>");

const OTPI_CLASS = INFUSIONS."online_time_panel".DIRECTORY_SEPARATOR;

if (!defined("OTPI_LOCALE")) {
    if (file_exists(OTPI_CLASS."locale/".LOCALESET."otime.php")) {
        define("OTPI_LOCALE", OTPI_CLASS."locale/".LOCALESET."otime.php");
    } else {
        define("OTPI_LOCALE", OTPI_CLASS."locale/Hungarian/otime.php");
    }
}
