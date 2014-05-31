<?php

class Account extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index($request = null) {
	}

	public function login() {
		$data['title'] = 'Sign In';

		$this->view->rendertemplate('soloHeader',$data);
		$this->view->render('acct/login',$data);
		$this->view->rendertemplate('soloFooter',$data);
	}

}