<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: classes/sqlhelper.php
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
namespace PHPFusion\Infusions\Online_time_panel\Classes;

class SqlHelper {

    public function getStatQuery(array $filters = []) {
        return "SELECT user_id, user_name, user_status, user_online, user_avatar, user_joined, user_level, user_lastvisit
            FROM ".DB_USERS."
            ".(!empty($filters['condition']) ? 'WHERE '.$filters['condition'] : '')."
            ".(multilang_table("OTPI") ? (!empty($filters['condition']) ? 'AND ' : 'WHERE ').in_group('user_language', LANGUAGE) : '')."
            ".(!empty($filters['order']) ? 'ORDER BY '.$filters['order'] : '')."
            ".(!empty($filters['limit']) ? 'LIMIT '.$filters['limit'] : '')."
        ";
    }
}
