<?php

class SysAcct_model extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function getUsers() {
		return $this->_db->select('SELECT * FROM users');
	}


}