<?php
class UserAccount {

/*	- id
	- uid→ (8 Characters Long: MD5 Hash of the Device Name - Basically the Unique ID)
	- Email
	- password
	- acctLevel (Basically the account type either main, or sub-account)
*/


//NOTE: All functions are static so no UserAccount object neeeds to be initalized . Call functions through UserAccount::function.

	//For creating a new user -- maybe create other rows here as well such as patient info?
	public function create($uid, $email, $password, $acctLevel){
		$attemptCreate = DB::insert("INSERT INTO UserAccount (uid, email, password, acctLevel) VALUES ('$uid',$email', '$password',   '$acctLevel'");

		if($attemptCreate){ //Make sure the user was created successfully
			return true;
		}else{
			return false;
		}
	}


	//For getting a specific field out of the UserAccount table
	public static function getInfo($info, $uid){
		$requestedInfo =  DB::select("SELECT $info FROM UserAccount WHERE uid = '$uid'");

		if ($requestedInfo) { //Make sure the request actually went through
			return $requestedInfo[0]->$info;
		}else{
			return "Error retrieving requsted information.";
		}

	}

	//For updating one field of a user's account
	public static function setInfo($field, $info, $uid){
		$attemptedRequest = DB::update("UPDATE UserAccount set '$field' = '$info' WHERE uid = ?", array('$uid'));
		
		//Make sure the request actually went through -- update returns number of rows affected by the request(make sure at least 1)
		if($attemptedRequest > 0){ 
			return true;
		}else {
			return false;
		}
	}

	public static function deleteRow($uid){
		$attemptedDelete = DB::delete("DELETE FROM UserAccount WHERE uid = '$uid'");

		//Make sure at least one row is affected by the request 
		if($attemptedDelete > 0){
			return true;
		}else{
			return false;
		}
	}




}
