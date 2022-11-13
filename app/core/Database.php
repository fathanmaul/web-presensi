<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$database = new Capsule;
$database->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'port' => 3306,
    'username' => 'root',
    'password' => '',
    'database' => 'new_presensi',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',   
]);


$database->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$database->setAsGlobal();
$database->bootEloquent();