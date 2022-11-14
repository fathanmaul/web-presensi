<?php

namespace App\Models;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Illuminate\Database\Eloquent\Model;


/**
 * model guru
 */
class guru extends Model
{
    protected $table = "tb_guru";
    public $timestamps = false;
}
