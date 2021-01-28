<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: cloud_panel.php
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
$locale = fusion_get_locale("", CLOUD_LOCALE);
$cloud = [];

$cloud_list = makefilelist(CLOUD_PATH.'cloud/', ".|..|index.php", TRUE, 'files');

if (!empty($cloud_list)) {
    foreach ($cloud_list as $file) {
        include_once(CLOUD_PATH.'cloud/'.$file);
    }
}

if (!empty($cloud)) {
    $colorst = 1;
    $limit = 10;
    $fontsizes = [10, 12, 16, 18, 24, 30];
    $fontsize = count($fontsizes)-1;

    $rgbcolor = ['gray', 'red', 'orange', 'green', '#ffdb00', '#1c4c8c', '#d8c6f2', '#8cbd57', '#f25b17', '#bec6cf', '#1c83c8', '#e68810', '#3168d6', '#cccccc', '#000000', '#b53800', '#b9ed8b', '#9cdeff', '#9474b3'];
    $c1 = count($rgbcolor)-1;
    $cloudi = 0;

    shuffle($cloud);

    openside($locale['CLOUD_00']);
    foreach ($cloud as $t) {
        $size = $fontsizes[mt_rand(0, $fontsize)];
        $color = $rgbcolor[mt_rand(0, $c1)];
        if ($cloudi) {
            echo ", ";
        }
        if ($cloudi >= $limit) {
            break;
        }
        $title = "[ ".$t['title']. " ] ".$t['term'];
        echo "<a style='font-size: ".$size."px;".($colorst ? " color: ".$color.";" : "")."' href='".$t['cloudlink']."' title='".$title."'>".$t['term']."</a>";
	    $cloudi++;
    }
    closeside();
}
