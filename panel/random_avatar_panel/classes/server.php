<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: classes/server.php
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
namespace PHPFusion\Rap;

abstract class RapServer {
    protected static $locale = [];
    private $sqlRap = NULL;

    public function __construct() {
        require_once RAP_PATH.'templates/random_avatar.tpl.php';
        self::$locale = fusion_get_locale("", RAP_LOCALE);
        $this->sqlRap = new Rapsql();
    }

	public function RapRndUser() {

        $data = dbarray(dbquery($this->sqlRap->getRandUserQuery()));
        if (empty($data)) {
        	return FALSE;
        }

        return $data;
	}

	public function getRapSumUser($guser = NULL) {

        $userdata = fusion_get_userdata('user_id');
        $result = dbquery($this->sqlRap->getSumQuery(), [':userId' => (int)$guser]);
        $db = dbcount("('avatar_id')", DB_RA_AVATAR, (multilang_table("RAP") ? in_group('avatar_language', LANGUAGE)."AND " : "")."user_id = :userid", [':userid' => (int)$guser]);
        $all = 0;

        $info = [];
        $vote = '';

        if (!empty($db)) {
            $data = dbarray($result);
            $rating_count = $data['rating_count'];
            if (iMEMBER && $userdata != $guser) {
                $brate = dbcount("(avatar_id)", DB_RA_AVATAR, (multilang_table("RAP") ? in_group('avatar_language', LANGUAGE)." AND user_id = '".$guser."' AND voting_id = '".$userdata."'" : ""));
                if (!empty($brate)) {
                    $vote = self::$locale['RAP_15'];
                } else {
                    $vote = self::$locale['RAP_16'];
                }
            }
        } else {
            $vote = self::$locale['RAP_13'];
        }

        $info['item'] = [
            'image' => ($db > 0 ? "[ ".ceil($rating_count / $db)." ] ".str_repeat(RMD_IMG, ceil($rating_count / $db)) : ''),
            'vote'  => !empty($db) ? sprintf(self::$locale['RAP_14'], $db) : '',
            'rate'  => $vote
        ];
        return $info;
	}
}
