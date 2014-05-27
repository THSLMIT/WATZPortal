<?php

class Coordinates{
/*
	- id
	- uid
	- sessionID
	- datetime (timestamp)
	- longitude
	- latitude
	- altitude
*/

//NOTE: All functions in this class are static and can therefore be called without initializing an instance of the class.

	//Create a new row in the coordinates table
	public function create($uid, $sessionID, $datetime, $longitude, latitude, altitude){
		$attemptCreate = DB::insert("INSERT INTO Coordinates (uid, sessionID, datetime, longitude, latitude, altitude) VALUES ('$uid', '$sessionID', '$datetime',   '$longitude', '$latitude', '$altitude'");

		if($attemptCreate){ //Make sure the row was created successfully
			return true;
		}else{
			return false;
		}
	}


	//For getting a specific field out of the coordinates table
	public static function getInfo($info, $uid){
		$requestedInfo =  DB::select("SELECT $info FROM Coordinates WHERE uid = '$uid'");

		if ($requestedInfo) { //Make sure the request actually went through
			return $requestedInfo[0]->$info;
		}else{
			return "Error retrieving requsted information.";
		}

	}

	//For updating one field of a coordinates row
	public static function setInfo($field, $info, $uid){
		$attemptedRequest = DB::update("UPDATE Coordinates set $field = '$info' WHERE uid = ?", array('$uid'));
		
		//Make sure the request actually went through -- update returns number of rows affected by the request(make sure at least 1)
		if($attemptedRequest > 0){ 
			return true;
		}else {
			return false;
		}
	}

	//Delete a specific row from the coordinates table
	public static function deleteRow($uid){
		$attemptedDelete = DB::delete("DELETE FROM Coordinates WHERE uid = '$uid'");

		//Make sure at least one row is affected by the request 
		if($attemptedDelete > 0){
			return true;
		}else{
			return false;
		}
	}

}