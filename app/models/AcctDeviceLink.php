<?php

class AcctDeviceLink{
/*
	- id
	- uid
	- DS_ID
	- SW_ID
	- status
*/

//NOTE: All functions in this class are static and can be called without initalizing an instance of the class first.

	//Create a new row in the acctdevicelink table
	public function create($uid, $sessionID, $startDateTime, $endDateTime, startCoordinate, endCoordinate){
		$attemptCreate = DB::insert("INSERT INTO AcctDeviceLink (uid, DS_ID, SW_ID, status) VALUES ('$uid', '$DS_ID',   '$SW_ID', '$status'");

		if($attemptCreate){ //Make sure the row was created successfully
			return true;
		}else{
			return false;
		}
	}


	//For getting a specific field out of the acctdevicelink table
	public static function getInfo($info, $uid){
		$requestedInfo =  DB::select("SELECT $info FROM AcctDeviceLink WHERE uid = '$uid'");

		if ($requestedInfo) { //Make sure the request actually went through
			return $requestedInfo[0]->$info;
		}else{
			return "Error retrieving requsted information.";
		}

	}

	//For updating one field of an acctdevicelink row
	public static function setInfo($field, $info, $uid){
		$attemptedRequest = DB::update("UPDATE AcctDeviceLink set $field = '$info' WHERE uid = ?", array('$uid'));
		
		//Make sure the request actually went through -- update returns number of rows affected by the request(make sure at least 1)
		if($attemptedRequest > 0){ 
			return true;
		}else {
			return false;
		}
	}

	public static function deleteRow($uid){
		$attemptedDelete = DB::delete("DELETE FROM AcctDeviceLink WHERE uid = '$uid'");

		//Make sure at least one row is affected by the request 
		if($attemptedDelete > 0){
			return true;
		}else{
			return false;
		}
	}



}
}