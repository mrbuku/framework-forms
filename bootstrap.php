<?php

require_once plugin_dir_path( __FILE__ ) .'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'   => 'mysql',
    'host'     => DB_HOST,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASSWORD,
    'prefix'   => 'wp_',
    'options'  => [
        PDO::ATTR_PERSISTENT => true,
    ],
]);

// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();