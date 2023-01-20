<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'db',
    'database' => 'ifriend',
    'username' => 'root',
    'password' => 'test'
]);

$capsule->bootEloquent();