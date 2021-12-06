<?php

namespace SON\FactoryMethod;

use SON\FactoryMethod\Interfaces\CreatorInterface;
use SON\FactoryMethod\Interfaces\ProductInterface;

class ConcreteCreator implements CreatorInterface
{
    public function factoryMethod(ProductInterface $product): ProductInterface
    {
        $product->setDirectory('images');
        return $product;
    }
}