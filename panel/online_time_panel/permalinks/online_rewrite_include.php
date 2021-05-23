<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: permalinks/online_rewrite_include.php
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

$regex = [
    "%rowstart%" => "([0-9]+)"
];

$pattern = [
    "online-bestof/rowstart/%rowstart%" => "infusions/online_time_panel/time_bestof.php?rowstart=%rowstart%",
    "online-bestof"                     => "infusions/online_time_panel/time_bestof.php"
];

