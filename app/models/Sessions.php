<?php

class Sessions{
/*
	- id
	- uid
	- sessionID
	- StartDateTime
	- EndDateTime
	- StartCoordinate
	- EndCoordinate
*/

//NOTE: All functions in this class are static and therefore it is unneccessary to initialize an instance of this class in order to call them.

	//Create a new row in the sessions table
	public function create($uid, $sessionID, $startDateTime, $endDateTime, startCoordinate, endCoordinate){
		$attemptCreate = DB::insert("INSERT INTO Sessions (uid, sessionID, startDateTime, endDateTime, startCoordinate, endCoordinate) VALUES ('$uid','$sessionID', '$startDateTime',   '$endDateTime', '$startCoordinate', '$endCoordinate'");

		if($attemptCreate){ //Make sure the row was created successfully
			return true;
		}else{
			return false;
		}
	}


	//For getting a specific field out of the sessions table
	public static function getInfo($info, $uid){
		$requestedInfo =  DB::select("SELECT $info FROM Sessions WHERE uid = '$uid'");

		if ($requestedInfo) { //Make sure the request actually went through
			return $requestedInfo[0]->$info;
		}else{
			return "Error retrieving requsted information.";
		}

	}

	//For updating one field of a session
	public static function setInfo($field, $info, $uid){
		$attemptedRequest = DB::update("UPDATE Sessions set $field = '$info' WHERE uid = ?", array('$uid'));
		
		//Make sure the request actually went through -- update returns number of rows affected by the request(make sure at least 1)
		if($attemptedRequest > 0){ 
			return true;
		}else {
			return false;
		}
	}

	public static function deleteRow($uid){
		$attemptedDelete = DB::delete("DELETE FROM Sessions WHERE uid = '$uid'");

		//Make sure at least one row is affected by the request 
		if($attemptedDelete > 0){
			return true;
		}else{
			return false;
		}
	}



}