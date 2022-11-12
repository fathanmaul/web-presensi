<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

class guruController extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			header('location: '. base_url . '/login');
			exit;
		}
	} 
	public function index()
	{
		$data['title'] = 'Home';
        $data['presensi'] = 'ini isi';
        $this->view('beranda', $data);
	}
}