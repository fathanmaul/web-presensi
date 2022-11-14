<?php

namespace App\Models;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Illuminate\Database\Eloquent\Model;


/**
 * model user
 */
class user extends Model
{
    protected $table = "tb_user";
    public $timestamps = false;
    protected $fillable = [
        "username",
        "password",
        "level",
    ];
}