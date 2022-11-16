<?php
    //model siswa
    namespace App\Models;
    require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
    use Illuminate\Database\Eloquent\Model;
    /**
     * model siswa
     */
    class Siswa extends Model
    {
        protected $table = "tb_siswa";
        public $timestamps = false;
        protected $fillable = [
            "nis",
            "id_kelas",
        ];
    }
?>