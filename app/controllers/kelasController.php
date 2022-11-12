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
			header('location: ' . base_url . '/login');
			exit;
		}
	}

	public function index()
	{
		$data['title'] = $this->kelas;
		$data['kelas'] = Kelas::join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.id_kelas')
			->join('tb_detail_siswa', 'tb_siswa.nis', '=', 'tb_detail_siswa.nis')
			->groupby('tb_kelas.nama_kelas')
			->get();
		foreach ($data['kelas'] as $kelas) {
			// echo $kelas;

			$jumlah[] = Kelas::join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.id_kelas')
				->join('tb_detail_siswa', 'tb_siswa.nis', '=', 'tb_detail_siswa.nis')
				->select('tb_siswa.id_kelas', 'tb_kelas.nama_kelas')
				->where('tb_kelas.id_kelas', '=', $kelas['id_kelas'])
				->get();
		}
		$data['jumlah_siswa'] = $jumlah;
		$this->view('kelas/index', $data);
	}

	public function detail($id_kelas)
	{
		$data['title'] = $this->kelas;
		$data['kelas'] = Kelas::join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.id_kelas')
			->join('tb_detail_siswa', 'tb_siswa.nis', '=', 'tb_detail_siswa.nis')
			->where('tb_kelas.id_kelas', '=', $id_kelas)
			->get();
		$this->view('kelas/detail', $data);
	}
}
