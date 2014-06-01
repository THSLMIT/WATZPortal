<?php

class Device_model extends Model {

	public function __construct(){
		parent::__construct();
	}

	public function linkIDCheck($linkID) {
		$data = $this->_db->select("SELECT * FROM docking_station WHERE uid = :linkID", array(':linkID' => $linkID));
		if (count($data) == 1) return true;
		else return false;
	}

	public function isLinkFree($linkID) {
		$data = $this->_db->select("SELECT * FROM acct_devLink WHERE uid = :linkID", array(':linkID' => $linkID));
		if (count($data) == 0) return true;

		return false;
	}

	public function linkAcctToDev($uid) {
		// Get Full Device ID
		$data = $this->_db->select("SELECT * FROM docking_station WHERE uid = :uid", array(':uid' => $uid));
		$deviceID = $data[0]->dsid;

		$data = array(
			'uid' => $uid,
			'dsid' => $deviceID
		);

		$this->_db->insert('acct_devLink', $data);
	}

	public function unlinkAcctDev($uid) {
		$data = array('uid' => $uid);
		$this->_db->delete('acct_devLink', $data);
	}

}