<?php

class SysAcct_model extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getHash($email) {
		$data = $this->_db->select('SELECT password FROM sysuser WHERE email = :email', array(':email' => $email));
		return $data[0]->password;
	}

	public function getUsers() {
		return $this->_db->select('SELECT * FROM users');
	}


}