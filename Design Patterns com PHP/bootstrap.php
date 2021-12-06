<?php

use SON\Db\DbSingleton;

require __DIR__ . '/vendor/autoload.php';

DbSingleton::configure([
    'dsn'=>'mysql:host=solid-php-db;dbname=test', 
    'user'=>'root', 
    'passwd'=>'root'
]);