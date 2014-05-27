<?php

class UserController extends BaseController{

	public function loginAttempt(){
			$email = Input::get('email');
			$password = Input::get('password');

			$validator = Validator::make(
   			   array(
        		'password' => $password,
        		'email' => $email
    		),
   			   array(
		        'password' => 'required|min:8',
		        'email' => 'required|email'
   		    )
		);


			if($validator->fails()){
				return Redirect::to('login?err=1');
			}else{

				$query = DB::select("SELECT * FROM  `UserAccount` WHERE email = '$email' AND password = '$password'");
				if($query){
					if(count($query[0]) != 0){
						Session::put('email', $email);
						return Redirect::to('dashboard');
					}else{
						return Redirect::to('login?err=1');
					}
				}else{
					return Redirect::to('login?err=1');
				}
			}
	}

}