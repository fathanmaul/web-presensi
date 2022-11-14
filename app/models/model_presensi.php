<?php

namespace App\Models;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Illuminate\Database\Eloquent\Model;


/**
 * model presensi
 */
class presensi extends Model
{
    protected $table = "tb_presensi";
}
