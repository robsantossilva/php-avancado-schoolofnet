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

$newSelect = $repository->first(2);

$newSelect->name = "Hugo Samuel";

$user = $repository->update($newSelect);
var_dump($user);
