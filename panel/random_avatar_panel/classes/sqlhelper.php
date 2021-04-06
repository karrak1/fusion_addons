<?php
namespace PHPFusion\Rap;

class Rapsql {

    public function getRandUserQuery() {
        return "SELECT * FROM ".DB_USERS." WHERE user_avatar != '' ORDER BY RAND()";
    }

    public function getSumQuery() {
        return "SELECT rating, IF(SUM(rating)>0, SUM(rating), 0) AS rating_count
            FROM ".DB_RA_AVATAR."
            WHERE
            ".(multilang_table("RAP") ? in_group('avatar_language', LANGUAGE)."AND " : "")."
            user_id = :userId
        ";
    }

    public function getStatQuery(array $filters = []) {
        return "SELECT ab.*, tu.user_id, tu.user_name, tu.user_status, tu.user_avatar, tu.user_joined, tu.user_level
            FROM ".DB_RA_AVATAR." AS ab
            LEFT JOIN ".DB_USERS." AS tu ON tu.user_id = ab.voting_id
            WHERE
            ".(multilang_table("RAP") ? in_group('avatar_language', LANGUAGE)."AND " : "")."
            ab.user_id = :voted
            ".(!empty($filters['order']) ? 'ORDER BY '.$filters['order'] : '')."
            ".(!empty($filters['limit']) ? 'LIMIT '.$filters['limit'] : '')."
        ";
    }
}
