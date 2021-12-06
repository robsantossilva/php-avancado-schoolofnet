<?php
require __DIR__.'/../vendor/autoload.php';

use SON\AbstractFactory\EditoraA;

$editoraA = new EditoraA();
$livroPHP = $editoraA->makeLivroLinguagem();
echo $livroPHP->getTitle();
echo PHP_EOL;
echo $livroPHP->getAuthor();
echo PHP_EOL;