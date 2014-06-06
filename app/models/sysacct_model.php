<?php

class SysAcct_model extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getHash($email) {
		$data = $this->_db->select('SELECT password FROM UserAccount WHERE email = :email', array(':email' => $email));
		return $data[0]->password;
	}

	public function accountExist($email) {
		$data = $this->_db->select('SELECT password FROM UserAccount WHERE email = :email', array(':email' => $email));
		if (count($data) == 1) return true;

		return false;
	}

	public function createAccount($sysacct, $userinfo) {
		$this->_db->insert('UserAccount', $sysacct);
		$this->_db->insert('UAInfo', $userinfo);
	}

	public function deleteAccount($uid) {
		$data = array('uid' => $uid);
		
	}
}