<?php

class Portal extends Controller {

	public function __construct(){
		parent::__construct();

		$this->view->rendertemplate('header', $data);
		$this->view->rendertemplate('headerBar', $data);
		$this->view->rendertemplate('sideBar', $data);
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