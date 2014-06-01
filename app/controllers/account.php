<?php

class Account extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index($request = null) {
	}

	public function login() {

		// Data Submission Check
		if(isset($_POST['submit'])){

			$acct = $this->loadModel("sysacct_model");

			$error = false;

			$email = $_POST['email'];
			$password = $_POST['password'];

			if ($email != "" || $password != "") {
				if(Password::verify($password, $acct->getHash($email)) == false) $error = true;
				else {
					// Set Sessions and Redirect to Port
				} 
			} else $error = true;

			if ($error) $data['error'] = "<div class='alert alert-warning'>Incorrect Credentials. Please try again.</div>";
		}

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
