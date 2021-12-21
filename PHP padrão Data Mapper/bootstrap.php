<?php

require __DIR__  . '/vendor/autoload.php';

use Robsantossilva\DataMapperOrm\Drivers\MySQL as Driver;
use Robsantossilva\DataMapperOrm\Repositories\Repository;
use App\Entities\Users;

$conn = new Driver;

$conn->connect([
    'server' => 'php-db',
    'database' => 'curso_php_data_mapper',
    'user' => 'root',
    'password' => 'root'
]);

$repository = new Repository($conn);
$repository->setEntity(Users::class);

$newUser = new Users([
    'name' => 'Robson Silva',
    'email' => 'robson@gmail.com',
    'password' => '123456'
]);
$user = $repository->insert($newUser);
var_dump($user);
