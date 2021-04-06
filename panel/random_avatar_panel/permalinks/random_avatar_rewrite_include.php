<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: direct_hit_rewrite_include.php
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
defined( 'IN_FUSION' ) || exit;

$regex = [
    "%rowstart%" => "([0-9]+)",
];

$pattern = [
    "Random-Avatar/rowstart/%rowstart%" => "infusions/random_avatar_panel/voted_me.php?rowstart=%rowstart%",
    "Random-Avatar/stat"                => "infusions/random_avatar_panel/voted_me.php",
];
