<?php

use App\Models\user;

class userController extends Controller
{
	public function index()
	{
		$data['title'] = 'Login';
		$this->view('/login/login', $data);
	}

	public function prosesLogin()
	{
		echo json_encode($_POST);
		if ($row = $this->checkLogin($_POST) > 0) {
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['session_login'] = 'sudah_login';
			$_SESSION['token'] = "";
			header('location: ' . base_url . '/home');
		} else {
			header('location: ' . base_url . '/login');
			exit;
		}
	}

	public function checkLogin($data)
	{
		if (isset($data['username']) && isset($data['password'])) {
			$users = user::where('username', '=', $data['username'])
				->where('password', '=', $data['password'])
				->get();
			echo $users;
			// return $users;
		}
	}

	public function logout()
	{
		session_start();
		session_destroy();
		header('location: ' . base_url . '/login');
	}
}
