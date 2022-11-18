<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
require 'vendor/autoload.php';

use App\Models\Siswa;
use App\Models\DetailSiswa;
use Rakit\Validation\Validator as validator;

class siswaController extends Controller
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
        $data['title'] = 'Data Siswa';
        $data['siswa'] = Siswa::all();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function edit()
    {
        $url = $this->parseURL();
        $data['title'] = 'Edit Data Siswa';
        $data['siswa'] = Siswa::join('tb_detail_siswa', 'tb_siswa.nis', '=', 'tb_detail_siswa.nis')
            ->where('tb_siswa.nis', '=', $url[2])->first();
        $this->view('templates/header', $data);
        $this->view('siswa/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->parseURL()[2] != null) {
            $data['title'] = 'Tambah Data Siswa';
            $data['id_kelas'] = $this->parseURL()[2];
            $this->view('templates/header', $data);
            $this->view('siswa/tambah', $data);
            $this->view('templates/footer');
        } else {
            header('location: ' . base_url . '/kelas');
            exit;
        }
    }

    public function simpan()
    {
        if (!isset($_POST['submit'])) {
            require_once 'app/views/errors/404.php';
            exit;
        }
        if (isset($_POST['submit'])) {
            $nis = $_POST['nis'];
            $nama = $_POST['nama_siswa'];
            $jk = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $no_telp = $_POST['no_telp'];
            $id_kelas = $_POST['id_kelas'];
            $tanggallahir = $_POST['tanggal_lahir'];
            $email = $_POST['email'];
            $password = $_POST['nis'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $siswa = [
                'nis' => $nis,
                'password' => $password,
                'id_kelas' => $id_kelas,
            ];
            $detail = [
                'nis' => $nis,
                'nama_siswa' => $nama,
                'alamat_siswa' => $alamat,
                'tanggal_lahir' => $tanggallahir,
                'notelp_siswa' => $no_telp,
                'jenis_kelamin' => $jk,
            ];
            try {
                Siswa::create($siswa);
                DetailSiswa::create($detail);
                Message::setFlash(['berhasil'], 'ditambahkan', 'success');
                header('location: ' . base_url . '/siswa');
                exit;
            } catch (\Throwable $th) {
                Message::setFlash(['gagal'], 'ditambahkan', 'danger');
                header('location: ' . base_url . '/siswa/tambah');
                exit;
            }
        }
    }

    public function save()
    {
        if (!isset($_POST['submit'])) {
            require_once 'app/views/errors/404.php';
            exit;
        }

        if (!$this->validasi()) {
            return false;
            exit;
        }

        if (!isset($this->parseURL()[2])) {
            echo 'error';
            require_once 'app/views/errors/404.php';
            exit;
        }

        $id_kelas = $this->parseURL()[2];
        $nis = $_POST['nis'];
        $nama = $_POST['nama_siswa'];
        $jk = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $tanggallahir = $_POST['tanggal_lahir'];
        $password = $_POST['nis'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $siswa = [
            'nis' => $nis,
            'password' => $password,
            'id_kelas' => $id_kelas,
        ];
        $detail = [
            'nis' => $nis,
            'nama_siswa' => $nama,
            'alamat_siswa' => $alamat,
            'tanggal_lahir' => $tanggallahir,
            'notelp_siswa' => $no_telp,
            'jenis_kelamin' => $jk,
        ];
        try {
            Siswa::create($siswa);
            DetailSiswa::create($detail);
            Message::setFlash(['data berhasil'], ' ditambahkan', 'success');
            return true;
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

    public function delete() {
        if (!isset($_POST['submit'])) {
            require_once 'app/views/errors/404.php';
            exit;
        }

        if (!$this->parseURL()[2]) {
            return false;
            exit;
        }

        $nis = $this->parseURL()[2];
        try {
            Siswa::where('nis', '=', $nis)->delete();
            DetailSiswa::where('nis', '=', $nis)->delete();
            Message::setFlash(['data berhasil'], ' dihapus', 'success');
            return true;
            exit;
        } catch (\Throwable $th) {
            Message::setFlash(['data gagal'], ' dihapus', 'danger');
            return false;
            exit;
        }

    }

    /**
     * @return bool
     *
     */
    public static function validasi(): bool
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'nis' => 'required|numeric',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'tanggal_lahir' => 'required',
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
