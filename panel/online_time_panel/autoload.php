<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: autoloader.php
| Author: PHP-Fusion Development Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
spl_autoload_register(function ($className) {

    $autoload_register_paths = [
        'PHPFusion\\Online_time\\SqlHelper' => OTPI_CLASS."classes/sqlhelper.php",
        'PHPFusion\\Online_time\\Online'    => OTPI_CLASS."classes/online.php",
        //'PHPFusion\\Online_time\\RapStat'   => RAP_PATH."classes/stat.php"
    ];

    if (isset($autoload_register_paths[$className])) {
        $fullPath = $autoload_register_paths[$className];
        if (is_file($fullPath)) {
            require_once $fullPath;
        }
    }
});
