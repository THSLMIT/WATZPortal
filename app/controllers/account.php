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

					Url::redirect('');
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
		// Data Submission Check
		if (isset($_POST['submit'])) {

			// Load Model
			$acct = $this->loadModel("sysacct_model");
			$device = $this->loadModel("device_model");

			// Error ID (0 for none)
			$error = 0;

			// Form Submission Data
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$pass_confirm = $_POST['pass_confirm'];
			$linkID = $_POST['linkID'];

			if ($first_name != "" || $last_name != "" || $email != "" || $pass != "" || $pass_confirm != "" || $linkID != "") {
				// Check if Account Exist
				if ($acct->accountExist($email)) $error = 2;
				else {
					// Check Password Confirmation
					if ($pass != $pass_confirm) $error = 3;
					else {
						// Check if link ID is valid.
						if(!$device->linkIDCheck($linkID)) $error = 4;
						else {

						}
					}
				}
			} else $error = 1;

			switch ($error) {
				case 0:
					echo "OKAY!";
					// redirect to next stage
					break;

				case 1:
					$data['error'] = "<div class='alert alert-warning'>Do not leave any of the fields blank.</div>";
					break;

				case 2:				
					$data['error'] = "<div class='alert alert-warning'>An account with that email already exists.</div>";
					break;

				case 3:
					$data['error'] = "<div class='alert alert-warning'>Passwords do not match.</div>";
					break;

				case 4:
					$data['error'] = "<div class='alert alert-warning'>Invalid Link ID.</div>";
					break;

			}
		}

		$data['title'] = 'Setup Account';

		$this->view->rendertemplate('soloHeader',$data);
		$this->view->render('acct/createAccount',$data);
	}
}
