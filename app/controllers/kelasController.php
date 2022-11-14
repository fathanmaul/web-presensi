<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
require 'vendor/autoload.php';

use App\Models\Kelas;

class kelasController extends Controller
{
	protected $kelas = 'Kelas';
	public function __construct()
	{
		if ($_SESSION['session_login'] != 'sudah_login') {
			header('location: ' . base_url . '/auth/login');
			exit;
		}
	}

	public function index()
	{
		$data['title'] = $this->kelas;
		$data['kelas'] = Kelas::all();
		$data['siswa'] = Kelas::join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.id_kelas')
			->join('tb_detail_siswa', 'tb_siswa.nis', '=', 'tb_detail_siswa.nis')
			->groupby('tb_kelas.nama_kelas')
			->get();

		foreach ($data['siswa'] as $kelas) {
			$jumlah[] = Kelas::join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.id_kelas')
				->join('tb_detail_siswa', 'tb_siswa.nis', '=', 'tb_detail_siswa.nis')
				->select('tb_siswa.id_kelas', 'tb_kelas.nama_kelas')
				->where('tb_kelas.id_kelas', '=', $kelas['id_kelas'])
				->get();
		}

		$data['jumlah_siswa'] = $jumlah;
		$this->view('kelas/index', $data);
	}

	public function detail()
	{
		$url = $this->parseURL();

		if (!isset($url[2])) {
			header('Location: ' . base_url . '/kelas/index');
		}

		$data['title'] = $this->kelas;
		$data['kelas'] = Kelas::join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.id_kelas')
			->join('tb_detail_siswa', 'tb_siswa.nis', '=', 'tb_detail_siswa.nis')
			->where('tb_kelas.id_kelas', '=', $url[2])
			->get();

		if ($data != null) {
			$this->view('kelas/detail', $data);
		} else {
			header('Location: ' . base_url . '/kelas/index');
			die;
		}
	}

	public function tambah() {
		$data['title'] = "kelas";
		$data['subtitle'] = "tambah kelas";
		$this->view('kelas/tambah', $data);
	}

	public function simpan() {
		if ($_POST > 1) {
			try {
				kelas::insert([
					'nama_kelas' => $_POST['nama_kelas'],
				]);
				header('Location: ' . base_url . '/kelas/index');
			} catch(\Illuminate\Database\QueryException $e){
				$errorCode = $e->errorInfo[1];
				if($errorCode == '1062'){
					header('Location: ' . base_url . '/kelas/tambah');
					Message::setFlash(['Kelas sudah ada'],'', 'danger');
				}
			}
		} else {
			header('Location: ' . base_url . '/kelas/index');
		}
	}

	public function edit()
	{
		$url = $this->parseURL();

		if (!isset($url[2])) {
			header('Location: ' . base_url . '/kelas/index');
		}

		$data['title'] = $this->kelas;
		$data['kelas'] = Kelas::where('tb_kelas.id_kelas', '=', $url[2])
			->first();

		if ($data != null) {
			$this->view('kelas/edit', $data);
		} else {
			header('Location: ' . base_url . '/kelas/index');
			die;
		}
	}

	public function update()
	{
		if ($_POST > 1) {
			Kelas::where('id_kelas', $_POST['id_kelas'])
				->update([
					"nama_kelas" => $_POST['nama_kelas'],
				]);
			header('Location: ' . base_url . '/kelas/index');
		}
	}

	public function hapus()
	{
		$url = $this->parseURL();

		if (!isset($url[2])) {
			header('Location: ' . base_url . '/kelas/index');
		}

		$hapus = Kelas::where('id_kelas', $url[2])->delete();

		if ($hapus) {
			$data['delete_kelas'.$url[2]] = "sukses";
			header('Location: ' . base_url . '/kelas/index');
		} else {
			header('Location: ' . base_url . '/kelas/index');
		}

	}

	public function parseURL()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}

}
