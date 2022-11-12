<?php

namespace App\Models;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "tb_kelas";
}
