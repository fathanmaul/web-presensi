
<?php

/**
 * @author Lutfi Sobri
 * @link https://kateruriyu.my.id
 * 
 */
class Controller{
	/**
	 * 
	 * @param string $view
	 * @param array $data
	 * mengarahkan tampilan ke halaman view
	 * 
	 * apabila ingin mengirimkan data ke view maka harus menggunakan array
	 * contoh
	 * 
	 * $data['title'] = 'Home';
	 * 
	 * $data['presensi'] = 'ini isi';
	 * 
	 * maka di kode html dapat di panggil dengan
	 * 
	 * echo $data['title'];
	 * 
	 */
	public function view(String $view, array $data = [])
	{
		require_once 'app/views/' . $view . '.php';
	}

	public function model($model)
	{
		require_once 'app/models/' . $model . '.php';
		return new $model;
	}
}