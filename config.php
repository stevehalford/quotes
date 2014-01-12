<?php
$settings = [
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'quotes',
    'username' => 'root',
    'password' => '',
    'prefix' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
];

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection($settings);
$capsule->bootEloquent();
$capsule->setAsGlobal();

$app->db = $capsule;
