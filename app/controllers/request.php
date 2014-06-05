<?php

class Request extends Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function getCoordinates(){
		$data['uid'] = Session::get('uid');
		$data['sessionID'] = Session::get('sessionID');
		$this->view->render('request/getCoordinates', $data);
	}
}