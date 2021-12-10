<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Facade\EntityFacade;

$facade = new EntityFacade;
$result = $facade->resolve('Robson Silva');
//$result = EntityFacade::resolve('Robson Silva');

var_dump($result);