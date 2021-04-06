<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: voted_me.php
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

class RapStat extends RapServer {
    private static $instance = NULL;
    private $sqlRap = NULL;

    public function __construct() {
        parent::__construct();
        $this->sqlRap = new Rapsql();
    }

    public static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function Display() {
        self::DiaryData();
    }

	private function DiaryData() {
        //$limit = 15;
        $limit = 2;
        $info = [];
        $voted = [];
        $user = fusion_get_userdata('user_id');

        $rowstart = get_rowstart("rowstart", $limit);
        //$rowstart = isset($_GET['rowstart']) ? $_GET['rowstart'] : 0; //filter_input(INPUT_GET, 'rowstart', FILTER_DEFAULT);
        $max_rows = dbcount("('avatar_id')", DB_RA_AVATAR, (multilang_table("RAP") ? in_group('avatar_language', LANGUAGE)."AND " : "")."user_id = :userid", [':userid' => (int)$user]);
        $rowstart = (!empty($rowstart) && isnum($rowstart) && $rowstart <= $max_rows) ? $rowstart : 0;

        $result = dbquery($this->sqlRap->getStatQuery(['order' => 'rating DESC', 'limit' => "$rowstart, $limit"]), [':voted' => (int)$user] );

        if (dbrows($result)) {
            while ($data = dbarray($result)) {
                $voted[] = $data;
            }
        }

        $info = [
            'stat'    => $voted,
            'all'     => dbrows($result),
            'pagenav' => makepagenav($rowstart, $limit, $max_rows, 3, RAP_PATH."voted_me.php?")
        ];
        DisplayStat($info);
	}
}
