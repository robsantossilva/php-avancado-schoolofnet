<?php

use SON\Db\Db;
use SON\Db\DbSingleton;

require __DIR__ . '/vendor/autoload.php';

$builder = new SON\Db\Builder\MySqlBuilder;
$categoryModel = new App\Model\Category($builder);

// $sql = $categoryModel->getSqlAll();
// var_dump($sql);


// $pdo = new \PDO('mysql:host=solid-php-db;dbname=test', 'root', 'root');
// $db = new Db($pdo);

DbSingleton::configure(['dsn'=>'mysql:host=solid-php-db;dbname=test', 'user'=>'root', 'passwd'=>'root']);
$db = DbSingleton::getInstance();

$db->setDirector($categoryModel);

$data = $db->getAll()->execute();

var_dump($data->fetchAll());
var_dump($data->errorInfo());