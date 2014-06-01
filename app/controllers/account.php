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

	public function setup() {
		$data['title'] = 'Setup Account';

		$this->view->rendertemplate('soloHeader',$data);
		$this->view->render('acct/signupInstr',$data);
		$this->view->rendertemplate('soloFooter',$data);
	}

	public function createForm() {
		$data['title'] = 'Setup Account';

		$this->view->rendertemplate('soloHeader',$data);
		$this->view->render('acct/createAccount',$data);
	}
}
