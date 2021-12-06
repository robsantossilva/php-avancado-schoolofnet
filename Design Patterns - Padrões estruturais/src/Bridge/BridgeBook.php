<?php

namespace SON\Bridge;

abstract class BridgeBook
{
    public function __construct(string $author, string $title, string $implementor)
    {
        $this->implementor = new $implementor($author, $title);
        if (!is_a($this->implementor, 'SON\Bridge\Implementor'))
            throw new \Exception("implementor must be the implementation of SON\Bridge\Implementor", 1);
            
    }

    public abstract function get():string;
}