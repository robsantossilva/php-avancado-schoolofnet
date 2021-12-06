<?php

namespace SON\FactoryMethod\Interfaces;

interface CreatorInterface
{
    public function factoryMethod(ProductInterface $product): ProductInterface;
}