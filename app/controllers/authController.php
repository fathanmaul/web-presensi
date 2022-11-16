<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use App\Models\user;
use Rakit\Validation\Validator as validator;

class authController extends Controller
{
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
				$_SESSION['login_time'] = time();
				$_SESSION['LAST_ACTIVITY'] = time();
				// $_SESSION['session_expired'] = $_SESSION['login_time'] + (60 * 60);
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
}
