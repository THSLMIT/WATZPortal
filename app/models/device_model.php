<?php

class Device_model extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function linkIDCheck($linkID) {
		$data = $this->_db->select('SELECT * FROM docking_station WHERE uid = :linkID', array(':linkID' => $linkID));
		if (count($data) == 1) return true;

		return false;
	}

}