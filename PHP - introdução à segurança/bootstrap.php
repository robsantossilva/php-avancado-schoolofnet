<?php

require __DIR__ . '/vendor/autoload.php';

new Robsantossilva\MyLog('Boot do App', 'info');

$id = (new Robsantossilva\Request)->get('id', FILTER_VALIDATE_INT);
var_dump($id);

$message = (new Robsantossilva\Request)->get('message', FILTER_SANITIZE_SPECIAL_CHARS);
echo $message;
