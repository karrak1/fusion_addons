<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: classes/online.php
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
namespace PHPFusion\Online_time;

class Online {
    private static $instance = NULL;
    private static $locale = [];
    private $sqlOnline = NULL;
    public $settings = [];

    public function __construct() {
        include_once OTPI_CLASS."templates/online_time.tpl.php";
        $this->settings = get_settings("online_time_panel");
        $this->sqlOnline = new SqlHelper();
        self::$locale = fusion_get_locale("", OTPI_LOCALE);
        self::SaveOnline();
    }

    public static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function PanelOnline() {
        $result = dbquery($this->sqlOnline->getStatQuery(['condition' => "user_online != 0", 'order' => 'user_online DESC', 'limit' => (int)$this->settings['online_limit']]));
        $otime = [];
        if (dbrows($result)) {
            while ($data = dbarray($result)) {
                $otime[] = $data;
            }
        }

        $info = [
            'stat'      => $otime,
            'stat_rows' => dbrows($result),
            'limit'     => $this->settings['online_limit']
        ];
        displayOnlineTime($info);
    }

    private function SaveOnline() {
        $uotime = fusion_get_userdata('user_lastvisit') == 0 ? 0 : time() - fusion_get_userdata('user_lastvisit');
        if ($uotime <= $this->settings['online_time']) {
            $result = dbquery("UPDATE ".DB_USERS." SET user_online = user_online+'".$uotime."' WHERE user_id = :user_id", [':user_id' => fusion_get_userdata('user_id')]);
        }
    }

    public function BestofOnline() {
        $limit = $this->settings['online_page'];
        $rowstart = get_rowstart("rowstart", $limit);
        $max_rows = dbcount("(user_id)", DB_USERS, "user_online != 0".(multilang_table("OTPI") ? ' AND '.in_group('user_language', LANGUAGE) : ''));
        $rowstart = (!empty($rowstart) && isnum($rowstart) && $rowstart <= $max_rows) ? $rowstart : 0;

        $result = dbquery($this->sqlOnline->getStatQuery(['condition' => "user_online != 0", 'order' => 'user_online DESC', 'limit' => "$rowstart, $limit"]));
        $infoall = [];

        if (dbrows($result)) {
            while ($data = dbarray($result)) {
                $infoall[] = $data;
            }
        }

        $info = [
            'statall'   => $infoall,
            'place'     => $rowstart,
            'pagenav'   => makepagenav($rowstart, $limit, $max_rows, 3)
        ];
        DisplayStat($info);
    }
}
