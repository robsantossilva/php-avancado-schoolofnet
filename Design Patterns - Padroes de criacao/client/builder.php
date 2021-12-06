<?php

use SON\Builder\Director;
use SON\Builder\MysqlBuilder;
use SON\Builder\PostgresBuilder;

require __DIR__.'/../vendor/autoload.php';

//$builder = new MysqlBuilder;
$builder = new PostgresBuilder;

$result = (new Director($builder))->getQuery('users');
var_dump($result->getQuery());