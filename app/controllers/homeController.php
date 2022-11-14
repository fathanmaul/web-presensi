<?php

use App\Models\detailPresensi;
use App\Models\presensi;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

class homeController extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			header('location: '. base_url . '/auth/login');
			exit;
		}
	} 

	/**
	 * 
	 * @return void
	 *
	 * method yang mengarahkan ke halaman home
	 * apabila session tidak ada maka akan di redirect ke halaman login
	 *
	*/
	public function index()
	{
		$data['title'] = 'Home';
		$hadir = count(detailPresensi::where('status_kehadiran','=','hadir')->get());
		$izin = count(detailPresensi::where('status_kehadiran', '=', 'izin')->get());
		$sakit = count(detailPresensi::where('status_kehadiran', '=', 'sakit')->get());
        $data['presensi'] = array($hadir, $izin, $sakit);
        $this->view('beranda', $data);
	}
}