<?php

namespace SON\FactoryMethod;

use SON\FactoryMethod\Interfaces\ProductInterface;

class Triangle implements ProductInterface
{
    private $directory = '/root/';

    public function setDirectory(string $directory)
    {
        $this->directory .= $directory;
    }
    public function getImage()
    {
        return $this->directory . '/tringle.png';
    }
}