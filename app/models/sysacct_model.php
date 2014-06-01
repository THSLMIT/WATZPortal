<?php

class SysAcct_model extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getHash($email) {
		$data = $this->_db->select('SELECT password FROM sysuser WHERE email = :email', array(':email' => $email));
		return $data[0]->password;
	}

	public function accountExist($email) {
		$data = $this->_db->select('SELECT password FROM sysuser WHERE email = :email', array(':email' => $email));
		if (count($data) == 1) return true;

		return false;
	}


}