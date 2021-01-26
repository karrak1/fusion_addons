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

\PHPFusion\Admins::getInstance()->setAdminPageIcons("ABOP", "<i class='admin-ico fa fa-fw fa-commenting'></i>");

const ABOP_PATH = INFUSIONS."avatar_bestof_panel".DIRECTORY_SEPARATOR;

if (!defined("DB_AVATAR_BEST")) {
	define("DB_AVATAR_BEST", DB_PREFIX."avatar_best");
}

if (!defined("ABOP_LOCALE")) {
    if (file_exists(ABOP_PATH."locale/".LOCALESET."ravp.php")) {
        define("ABOP_LOCALE", ABOP_PATH."locale/".LOCALESET."ravp.php" );
    } else {
        define("ABOP_LOCALE", ABOP_PATH."locale/Hungarian/ravp.php" );
    }
}
