<?php

namespace App\Models;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Illuminate\Database\Eloquent\Model;


/**
 * model kelas
 */
class Kelas extends Model
{
    protected $table = "tb_kelas";
    public $timestamps = false;
    protected $fillable = [
        "nama_kelas",
    ];
}
