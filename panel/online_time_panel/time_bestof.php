<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: time_bestof.php
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
require_once __DIR__."/../../maincore.php";
require_once THEMES."templates/header.php";

if (defined('ONLINE_TIME_PANEL_EXIST')) {
    if (column_exists(DB_USERS, 'user_online')) {
        require_once OTPI_CLASS."autoload.php";
        \PHPFusion\Online_time\Online::getInstance()->BestofOnline();
    }
}

require_once THEMES."templates/footer.php";