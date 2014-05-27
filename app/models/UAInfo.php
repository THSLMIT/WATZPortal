<?php

class UAInfo{


/*	- id
	- uid
	- First Name
	- Last Name
	- Email
	- Home Number
	- Cell Number
	- Address 1
	- Address 2
	- City
	- Zip
	- State/Providence
	- Country
*/

//NOTE: All the functions in this class are static. There is no need to initalize an object to call the functions of this class.

	//Create a new entry in the UAInfo table
	public static function create($uid, $firstName, $lastName, $email, $homeNumber, $cellNumber, $address1, $address2, $city, $zip, $state, $country){
		$attemptedCreate = DB::insert("INSERT INTO UAInfo (id, firstName, email, homeNumber, cellNumber, address1, address2, city, zip, state, country) 
										VALUES('$uid', '$firstName', '$lastName', '$email', '$homeNumber', '$cellNumber', '$address1', '$address2', '$city', '$zip', '$state', '$country')");

			if($attemptedCreate){ //Make sure the request works
				return true;
			}else{
				return false;
			}
	}

	//For getting a specific field out of the UAInfo table
	public static function getInfo($info, $uid){
	$requestedInfo =  DB::select("SELECT $info FROM UAInfo WHERE uid = '$uid'");

		if ($requestedInfo) { //Make sure the request actually went through
				return $requestedInfo[0]->$info;
			}else{
				return false;
			}
		}	

	//For updating one field of a user's account
	public static function setInfo($field, $info, $uid){
		$attemptedRequest = DB::update("UPDATE UAInfo set $field = '$info' WHERE uid = '$uid'");
		
		//Make sure the request actually went through -- update returns number of rows affected by the request(make sure at least 1)
		if($attemptedRequest > 0){ 
			return true;
		}else {
			return false;
		}
	}


	public static function deleteRow($uid){
		$attemptedDelete = DB::delete("DELETE FROM UAInfo WHERE uid = '$uid'");

		//Make sure at least one row is affected by the request 
		if($attemptedDelete > 0){
			return true;
		}else{
			return false;
		}
	}


}