<?php

use App\Models\Mapel;
use App\Models\Kelas;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

class pelajaranController extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            header('Location: ' . base_url . '/auth/login');
        }
    }

    public function index()
    {
        $data['title'] = "pelajaran";
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
        $this->view('pelajaran/index', $data);
    }

    public function kelas() {
        if (!isset($this->parseURL()[2])) {
            header('Location: '.base_url.'/pelajaran/index');
            exit;
        }
        $data['title'] = "pelajaran";
        $this->view('pelajaran/jadwal', $data);
    }


}
