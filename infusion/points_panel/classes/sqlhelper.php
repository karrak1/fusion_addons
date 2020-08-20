<?php
namespace PHPFusion\Points;

class Pointssql {

    public function getSettingsQuery() {
        return "SELECT * FROM ".DB_POINT_ST."
            ".(multilang_table("PSP") ? "WHERE ".in_group('ps_language', LANGUAGE) : '');
    }

    public function getPointUserQuery() {
        return "SELECT *
            FROM ".DB_POINT."
            WHERE point_user = :userid
            ".(multilang_table("PSP") ? " AND ".in_group('point_language', LANGUAGE) : '')."
            LIMIT 1
        ";
    }

}
