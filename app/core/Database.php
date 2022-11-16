<?php

/**
 * Database
 * 
 * @package App\Core
 *
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$ini = parse_ini_file('config/php.ini');

$database = new Capsule;
$database->addConnection([
    'driver' => $ini['db_driver'],
    'host' => $ini['db_host'],
    'port' => $ini['db_port'],
    'username' => $ini['db_username'],
    'password' => $ini['db_password'],
    'database' => $ini['db_name'],
    'charset' => $ini['db_charset'],
    'collation' => $ini['db_collation'],   
]);


$database->setEventDispatcher(new Dispatcher(new Container));

$database->setAsGlobal();
$database->bootEloquent();