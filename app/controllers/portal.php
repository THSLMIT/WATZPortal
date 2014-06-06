<?php

class Portal extends Controller {

	public function __construct(){
		parent::__construct();

		$this->view->rendertemplate('header', $data);
		$this->view->rendertemplate('headerBar', $data);
		$this->view->rendertemplate('sideBar', $data);
	}

	public function index($request = null) {

		$this->view->render('dashboard/index', $data);

		/* Database Test
		$sysacct = $this->loadModel('sysAcct_model');
		echo $sysacct->getUsers()[0]->email;
		*/
	}
	
	public function track(){
		Session::set('uid', '64738201');
		Session::set('sessionID', '72fkskal');
		$this->view->render('dashboard/track', $data);
	}
	
	

	public function login() {
		$data['title'] = 'Sign In';

		$this->view->rendertemplate('soloHeader',$data);
		$this->view->render('acct/login',$data);
		$this->view->rendertemplate('soloFooter',$data);
	}
	
	public function acctSettings(){
		if(isset($_POST['firstName'])){
			$firstName;
		}
		
		$this->view->render('dashboard/acctSettings');
		
	}
	

}