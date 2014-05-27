<?php

class PatientInfo{
/*
	- id
	- uid
	- First Name
	- Last Name
	- DOB (Date of Birth)
	- Phone1
	- Phone2
	- Address 1
	- Address 2
	- City
	- Zip
*/

//NOTE: All functions are static so there is no need to initialize an instance of this class in order to use the functions within.

	//Create a new entry in the PatientInfo table
	public static function create($uid, $firstName, $lastName, $DOB, $phone1, $phone2, $address1, $address2, $city, $zip, $state, $country){
		$attemptedCreate = DB::insert("INSERT INTO PatientInfo (id, firstName, DOB, phone1, phone2, address1, address2, city, zip, state, country) 
										VALUES('$uid', '$firstName', '$lastName', '$DOB', '$phone1', '$phone2', '$address1', '$address2', '$city', '$zip', '$state', '$country')");

			if($attemptedCreate){ //Make sure the request works
				return true;
			}else{
				return false;
			}
	}

	//For getting a specific field out of the Patientinfo table
	public static function getInfo($info, $uid){
	$requestedInfo =  DB::select("SELECT $info FROM PatientInfo WHERE uid = '$uid'");

		if ($requestedInfo) { //Make sure the request actually went through
				return $requestedInfo[0]->$info;
			}else{
				return false;
			}
		}	

	//For updating one field of a patient's information 
	public static function setInfo($field, $info, $uid){
		$attemptedRequest = DB::update("UPDATE PatientInfo set $field = '$info' WHERE uid = '$uid'");
		
		//Make sure the request actually went through -- update returns number of rows affected by the request(make sure at least 1)
		if($attemptedRequest > 0){ 
			return true;
		}else {
			return false;
		}
	}


	//Delete row from the PatientInfo table
	public static function deleteRow($uid){
		$attemptedDelete = DB::delete("DELETE FROM PatientInfo WHERE uid = '$uid'");

		//Make sure at least one row is affected by the request 
		if($attemptedDelete > 0){
			return true;
		}else{
			return false;
		}
	}



}