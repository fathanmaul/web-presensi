<?php
    namespace App\Models;
    require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
    use Illuminate\Database\Eloquent\Model;
    /**
     * model detail siswa
     */
    class DetailSiswa extends Model
    {
        protected $table = "tb_detail_siswa";
        public $timestamps = false;
        protected $fillable = [
            "nis",
            "nama_siswa",
            "alamat_siswa",
            "tanggal_lahir",
            "notelp_siswa",
            "jenis_kelamin",
        ];
    }
?>