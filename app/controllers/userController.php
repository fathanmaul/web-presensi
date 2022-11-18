<?php

use App\Models\User;

class userController extends Controller
{
	public function __construct()
	{
		if ($_SESSION['session_login'] != 'sudah_login') {
			header('location: ' . base_url . '/auth/login');
			exit;
		}
	}

	public function edit()
	{
		$data['title'] = 'Login';
		$data['user'] = User::where('id_user','=',$_SESSION['session_id'])->first();
		$this->view('user/edit', $data);
	}
}
