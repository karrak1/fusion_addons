<?php
/*-------------------------------------------------------+
| PHPFusion Content Management System
| Copyright (C) PHP Fusion Inc
| https://phpfusion.com/
+--------------------------------------------------------+
| Filename: classes/rap_panel.php
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

class RapPanel extends RapServer {
    private static $instance = NULL;
    public $rnduser = [];

    public function __construct() {
        parent::__construct();
		$this->rnduser = self::RapRndUser();
    }

    public static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function StartGame() {
        !empty($this->rnduser) ? self::Display() : '';
    }

    private function display() {
        $info = [];
        if(iMEMBER && check_post("saverating")) {
            self::saveRap();

        }

        $lastday = '';
        if (!empty($this->rnduser['user_lastvisit'])) {
    	    $last = (time() - $this->rnduser['user_lastvisit']);
    	    $lastday = sprintf("%2d", floor($last/86400));
        }



        $info = [
            'profile'     => profile_link($this->rnduser['user_id'], $this->rnduser['user_name'], $this->rnduser['user_status']),
            'avatar'      => display_avatar($this->rnduser, '100px', '', TRUE, 'img-rounded'),
            'join'        => sprintf(self::$locale['RAP_06'], showdate(self::$locale['RAP_DAT'], $this->rnduser['user_joined'])),
            'location'    => !empty($this->rnduser['user_location']) ? sprintf(self::$locale['RAP_07'], $this->rnduser['user_location']) : '',
            'birthdate'   => $this->rnduser['user_birthdate'] != "1900-01-01" && $this->rnduser['user_birthdate'] != '1970-1-01' ? sprintf(self::$locale['RAP_08'], showdate('%Y', time())-substr($this->rnduser['user_birthdate'],0,4)) : '',
            'web'         => !empty($this->rnduser['user_web']) ? !preg_match("@^http(s)?\:\/\/@i", $this->rnduser['user_web']) ? "http://".$this->rnduser['user_web'] : $this->rnduser['user_web'] : '',
            'lastvisit'   => !empty($this->rnduser['user_lastvisit']) ? sprintf(self::$locale['RAP_10'], showdate("%Y.%m.%d.-%H:%M", $this->rnduser['user_lastvisit'])) : '',
            'lastday'     => !empty($lastday) && $lastday > 0 ? sprintf(self::$locale['RAP_11'], $lastday) : '',
            'message'     => self::getRapSumUser($this->rnduser['user_id']),
            'buton'       => self::RndForm()
        ];
        displayRap($info);
    }

    private function saveRap() {
        $saverap = [
            'avatar_id' => '',
            'user_id'   => form_sanitizer($_POST['user_id'], 0, 'user_id'),
            'rating'    => form_sanitizer($_POST['saverating'], 0, 'saverating'),
            'voting_id' => fusion_get_userdata('user_id')
        ];

        if (\defender::safe()) {
            $data = [];

            if (defined("RMD_PM")) {
                require_once INCLUDES."infusions_include.php";
                $subject = self::$locale['RAP_19'];
                $message = sprintf(self::$locale['RAP_20'], fusion_get_userdata('user_name'), $saverap['rating']);
                $from = $saverap['voting_id'];
                $to =  $saverap['user_id'];
                send_pm($to, $from, $subject, $message);
            }

            $data = dbarray(dbquery("SELECT * FROM ".DB_RA_AVATAR." WHERE user_id = :userid AND voting_id = :voteid", [':userid' => (int)$saverap['user_id'], ':voteid' => (int)$saverap['voting_id']]));
            !empty($data) ? $saverap['avatar_id'] = $data['avatar_id'] : '';

            dbquery_insert(DB_RA_AVATAR, $saverap, empty($saverap['avatar_id']) ? 'save' : 'update');
            addNotice('success', self::$locale['RAP_18']);
            redirect(FUSION_SELF);
        }
    }

    private function RndForm() {
    	$info = [];
    	if (iMEMBER && ($this->rnduser['user_id'] != fusion_get_userdata('user_id'))) {
    	    $info = [
                'selectrap'   => form_select('saverating', self::$locale['RAP_12'], 0, [
                    'inner_width' => '100%',
                    'options'     => range(0, 10),
                    'onchange'    => 'document.saveratingform.submit()'
                ]),
                'hiderap'     => form_hidden('user_id', '', $this->rnduser['user_id']),
    	    ];
    	}

        return $info;
    }

}