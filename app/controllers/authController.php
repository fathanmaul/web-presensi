<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use App\Models\user;
use Rakit\Validation\Validator as validator;

class authController extends Controller
{
	/**
	 * method yang mengarahkan ke halaman login
	 *
	 */
	public function login()
	{
		$data['title'] = 'Login';
		$this->view('/auth/login', $data);
	}

	public function register()
	{
		$data['title'] = 'Register';
		$this->view('/auth/register', $data);
	}

	/**
	 * method yang memproses login
	 * proses login ini menggunakan session
	 * 
	 * 
	 * session ini akan di cek di setiap halaman yang membutuhkan login
	 * 
	 * 
	 * apabila session tidak ada maka akan di redirect ke halaman login
	 * berikut contoh session yang di cek di kelasController.php
	 * 
	 * 
	 * 
	 * if ($_SESSION['session_login'] != 'sudah_login') 
	 
	 * {
	 * 
	 * 		header('location: ' . base_url . '/login');
	 * 		exit;
	 * }
	 *
	 */
	public function authLogin()
	{
		$validator = new validator;
		$validation = $validator->make($_POST, [
			'username' => 'required',
			'password' => 'required'
		]);

		$validation->setMessages([
			'required' => ':attribute wajib diisi'
		]);

		$validation->validate();

		if ($validation->fails()) {
			$errors = $validation->errors();
			$pesan = $errors->firstOfAll();
			Message::setFlash($pesan, 'login', 'danger');
			header('location: ' . base_url . '/auth/login');
			exit;
		}

		$username = $_POST['username'];
		$password = $_POST['password'];

		$cek = user::where('username', '=', $username)->first();
		session_start();
		if ($cek != null) {
			if ($password == $cek['password']) {
				$_SESSION['session_login'] = 'sudah_login';
				$_SESSION['session_username'] = $cek['username'];
				$_SESSION['session_level'] = $cek['id_level'];
				$_SESSION['session_id'] = $cek['id_user'];
				header('location: ' . base_url . '/home');
				exit;
			}
			else {
				Message::setFlash(['Password salah'], 'login', 'danger');
				header('location: ' . base_url . '/auth/login');
				exit;
			}
		} else {
			Message::setFlash(['Username tidak ditemukan'], 'salah.', 'danger');
			header('location: ' . base_url . '/auth/login');
			exit;
		}
	}

	/**
	 * method yang memproses logout
	 *
	 */
	public function logout()
	{
		session_start();
		session_destroy();
		header('location: ' . base_url);
		exit;
	}

	public function authRegister()
	{
		$validator = new validator;
		$validation = $validator->make($_POST, [
			'username' => 'required',
			'password' => 'required',
			// 'level' => 'required'
		]);

		$validation->setMessages([
			'required' => ':attribute wajib diisi'
		]);

		$validation->validate();

		if ($validation->fails()) {
			$errors = $validation->errors();
			$pesan = $errors->firstOfAll();
			Message::setFlash($pesan, '', 'danger');
			header('location: ' . base_url . '/auth/register');
			exit;
		}

		$username = $_POST['username'];
		$password = $_POST['password'];
		// $level = $_POST['id_level'];
		$level = 1;

		$cek = user
			::where('username', '=', $username)
			->first();

		if ($cek != null) {
			Message::setFlash(['Username sudah digunakan'], '', 'danger');
			header('location: ' . base_url . '/auth/register');
			exit;
		}
		
		$register = new user;
		$register->username = $username;
		$register->password = password_hash($password, PASSWORD_DEFAULT);
		$register->id_level = $level;
		$register->save();

		Message::setFlash(['Berhasil mendaftar'], '', 'success');
		header('location: ' . base_url . '/auth/login');
		exit;
	}


	// public function prosesLogin()
	// {
	// 	$this->validasi();
	// 	$data['title'] = "login";
	// 	$row = $this->checkLogin($_POST);

	// 	if (!$row == []) {
	// 		session_start();
	// 		$_SESSION['username'] = $row['username'];
	// 		$_SESSION['password'] = $row['password'];
	// 		$_SESSION['id'] = $row['id_user'];
	// 		$_SESSION['level'] = $row['id_level'];
	// 		$_SESSION['session_login'] = 'sudah_login';
	// 		header('location: ' . base_url . '/home');
	// 	} else {
	// 		// $this->view('/login/login', $data);
	// 		header('Location: '.base_url.'/login');
	// 		exit;
	// 	}
			
	// 		// session_start();
	// 		// $_SESSION['username'] = $row['username'];
	// 		// $_SESSION['password'] = $row['password'];
	// 		// $_SESSION['id'] = $row['id_user'];
	// 		// $_SESSION['level'] = $row['id_level'];
	// 		// $_SESSION['session_login'] = 'sudah_login';
	// 		// header('location: ' . base_url . '/home');
	// 	// } else {
	// 		// header('location: ' . base_url . '/login');
	// 		// exit;
	// 	// }

	// 	// header('location: ' . base_url . '/login');
	// 	// exit;
	// }

	// public function checkLogin($data)
	// {
	// 	if (isset($data['username']) && isset($data['password'])) {
	// 		$users = user::where('username', $data['username'])
	// 			->where('password', $data['password'])
	// 			->first();
	// 		return $users;
	// 	}
	// }

	// protected function validasi()
	// {
	// 	$validator = new Validator;

	// 	$validation = $validator->make([
	// 		'username' => $_POST['username'],
	// 		'password' => $_POST['password']
	// 	], [
	// 		'username' => 'required',
	// 		'password' => 'required'
	// 	]);
	// 	$validation->validate();

	// 	if ($validation->fails()) {
	// 		$errors = $validation->errors()->firstOfAll();
	// 		if ($errors['username'] != "") {
	// 			Message::setFlash(['Password'], 'wajib di isi', 'danger');
	// 			header('Location : '.base_url.'/login');
	// 			exit;
	// 		}
	// 		echo "<br>";
	// 		if ($errors['password'] != "") {
	// 			Message::setFlash(['Password'], 'wajib di isi', 'danger');
	// 			header('Location : '.base_url.'/login');
	// 			exit;
	// 		}
	// 		$data['title'] = 'Login';
	// 		$this->view('/login/login', $data);
	// 		exit;
	// 	}
	// }
}
