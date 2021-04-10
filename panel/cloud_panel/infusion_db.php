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
(defined('IN_FUSION') || exit);

\PHPFusion\Admins::getInstance()->setAdminPageIcons("CLUD", "<i class='admin-ico fa fa-fw fa-commenting'></i>");

const CLOUD_PATH = INFUSIONS."cloud_panel".DIRECTORY_SEPARATOR;
const CLOUD_LIMIT = 15;

if (!defined("CLOUD_LOCALE")) {
    if (file_exists(CLOUD_PATH."locale/".LOCALESET."cloud.php")) {
        define("CLOUD_LOCALE", CLOUD_PATH."locale/".LOCALESET."cloud.php" );
    } else {
        define("CLOUD_LOCALE", CLOUD_PATH."locale/Hungarian/cloud.php" );
    }
}
