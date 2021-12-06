<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Composite\PHPCategory;
use SON\Composite\SolidCategory;
use SON\Composite\FrameworksCategory;
use SON\Composite\LaravelCategory;


$php = new PHPCategory;
$solid = new SolidCategory;
$framework = new FrameworksCategory;
$laravel = new LaravelCategory;


$solid->addCategory($laravel);
$framework->addCategory($laravel);
$php->addCategory($framework);
$php->addCategory($solid);

$solid->removeCategory($laravel);

function categoriesList($category, $start = '__') {
    $i = 0;
    while ($category->getCategory($i) !== null) {

        $cat = $category->getCategory($i);
        echo $start . $cat->getName().PHP_EOL;

        
        if ($cat->getCategory(0) !== null) {
            categoriesList($cat, $start.'__');
        }
        
        $i++;
    }
}

echo '_PHP'.PHP_EOL;
categoriesList($php);