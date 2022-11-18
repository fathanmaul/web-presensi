<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Presensi;
use App\Models\DetailPresensi;

class presensiController extends Controller
{
	public function __construct()
	{
		if ($_SESSION['session_login'] != 'sudah_login') {
			header('location: ' . base_url . '/auth/login');
			exit;
		}
	}

	public function index()
	{
		$data['title'] = 'Home';
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
		$this->view('presensi/index', $data);
	}

	public function mapel() {
		if (!isset($this->parseURL()[2])) {
			header('Location: '.base_url.'/presensi/index');
			exit;
		}
		$data['kelas'] = Kelas::all();
		$this->view('presensi/jadwal', $data);
	}

	public function jadwal() {
		
	}
}
