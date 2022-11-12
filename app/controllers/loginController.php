<?php

class loginController extends Controller {
	public function index()
	{
		$data['title'] = 'Login';
		$this->view('/login/login', $data);
	}

	public function prosesLogin() {
		if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['session_login'] = 'sudah_login'; 
				header('location: '. base_url . '/home');
		} else {
			header('location: '. base_url . '/login');
			exit;	
		}
	}
}