<?php

use App\Models\Guru;
use Rakit\Validation\Validator;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

class guruController extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			header('location: '. base_url . '/auth/login');
			exit;
		}
	} 
	
	public function index()
	{
		$data['title'] = 'Home';
		$data['guru'] = Guru::all();
        $this->view('guru/index', $data);
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Guru';
		$this->view('guru/tambah', $data);
	}

	public function edit() 
	{
		if (!isset($this->parseURL()[2])) {
			echo '404';
			header('Location: ' . base_url . '/guru/index');
		}

		if (Guru::where('nuptk', '=', $this->parseURL()[2])->get() == null) {
			echo 'Data tidak ditemukan';
			header('Location: ' . base_url . '/guru/index');
		}
		$data['title'] = 'Edit Guru';
		if (isset($this->parseURL()[2])) {
			$data['guru'] = Guru::where('nuptk', $this->parseURL()[2])->first();
			$this->view('guru/edit', $data);
		} else {
			header('Location: ' . base_url . '/guru/index');
		}
	}

	public function simpan() {
		if (!$this->validasi()) {
			return false;
			exit;
		}

		if (!isset($_POST['submit'])) {
			require_once 'app/views/errors/404.php';
			exit;
		}

		$guru = [
			'nuptk' => $_POST['nuptk'],
			'id_user' => 2,
			'nama_guru' => $_POST['nama_guru'],
			'alamat_guru' => $_POST['alamat_guru'],
			'notelp_guru' => $_POST['notelp_guru'],
		];

		try {
			Guru::create($guru);
			header('Location: ' . base_url . '/guru');
			exit;
		} catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($e->errorInfo[1] == 1062) {
                Message::setFlash(['data sudah ada'], '', 'danger');
                return false;
                exit;
            }
            Message::setFlash(['data gagal'], ' ditambahkan', 'danger');
            return false;
            exit;
        }
		
	}

	public function update() {
		if (!isset($_POST['submit'])) {
			require_once 'app/views/errors/404.php';
			exit;
		}

		if (!$this->validasi()) {
			return false;
			exit;
		}

		try {
			Guru::where('nuptk', $_POST['nuptk'])
				->update([
					'nama_guru' => $_POST['nama_guru'],
					'alamat_guru' => $_POST['alamat_guru'],
					'notelp_guru' => $_POST['notelp_guru'],
				]);
			header('Location: ' . base_url . '/guru');
			exit;
		} catch (\Illuminate\Database\QueryException $e) {
			$errorCode = $e->errorInfo[1];
			if ($errorCode == 1062) {
				Message::setFlash(['data sudah ada'], '', 'danger');
				return false;
				exit;
			}
			Message::setFlash(['data gagal'], ' ditambahkan', 'danger');
			return false;
			exit;
		}
	}

	public function hapus()
	{
		$url = $this->parseURL();

		if (!isset($url[2])) {
			header('Location: ' . base_url . '/guru/index');
		}

		$hapus = Guru::where('nuptk', $url[2])->delete();

		if ($hapus) {
			$data['delete_kelas' . $url[2]] = "sukses";
			header('Location: ' . base_url . '/guru/index');
		} else {
			header('Location: ' . base_url . '/guru/index');
		}
	}

	public function validasi(): bool
    {
        $validator = new Validator();
        $validation = $validator->make($_POST, [
            'nuptk' => 'required|numeric',
            'nama_guru' => 'required',
            'alamat_guru' => 'required',
            'notelp_guru' => 'required|numeric',
        ]);
        $validation->setMessages([
            'required' => ':attribute wajib diisi',
            'numeric' => ':attribute harus berupa angka',
        ]);
        $validation->validate();
        if ($validation->fails()) {
            $errors = $validation->errors();
            $pesan = $errors->firstOfAll();
            Message::setFlash($pesan, '', 'danger');
            return false;
        } else {
            return true;
        }
    }
}