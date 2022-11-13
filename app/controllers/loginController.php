<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use App\Models\user;
use Rakit\Validation\Validator as validator;

class loginController extends Controller
{
	public function index()
	{
		$data['title'] = 'Login';
		$this->view('/login/login', $data);
	}

	public function prosesLogin()
	{
		$this->validasi();
		$row = $this->checkLogin($_POST);

		if (!$row == []) {
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['id'] = $row['id_user'];
			$_SESSION['level'] = $row['id_level'];
			$_SESSION['session_login'] = 'sudah_login';
			header('location: ' . base_url . '/home');
		} else {
			$this->view('/login/login');
			exit;
		}
			
			// session_start();
			// $_SESSION['username'] = $row['username'];
			// $_SESSION['password'] = $row['password'];
			// $_SESSION['id'] = $row['id_user'];
			// $_SESSION['level'] = $row['id_level'];
			// $_SESSION['session_login'] = 'sudah_login';
			// header('location: ' . base_url . '/home');
		// } else {
			// header('location: ' . base_url . '/login');
			// exit;
		// }

		// header('location: ' . base_url . '/login');
		// exit;
	}

	public function checkLogin($data)
	{
		if (isset($data['username']) && isset($data['password'])) {
			$users = user::where('username', $data['username'])
				->where('password', $data['password'])
				->first();
			return $users;
		}
	}

	public function logout()
	{
		session_start();
		session_destroy();
		header('location: ' . base_url . '/login');
	}

	protected function validasi()
	{
		$validator = new Validator;

		$validation = $validator->make([
			'username' => $_POST['username'],
			'password' => $_POST['password']
		], [
			'username' => 'required',
			'password' => 'required'
		]);
		$validation->validate();

		if ($validation->fails()) {
			$errors = $validation->errors()->firstOfAll();
			if ($errors['username'] != "") {
				echo "username wajib di isi";
			}
			echo "<br>";
			if ($errors['password'] != "") {
				echo "password wajib di isi";
			}
			$data['title'] = 'Login';
			$this->view('/login/login', $data);
			exit;
		}
	}
}
