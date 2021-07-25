<?php 

namespace Robson\Solid\Tags;

class Img implements TagInterface {

    function __construct(string $src)
    {
        $this->src = $src;
    }

    public function render(): string{
        return '<img src="'.$this->src.'">';
    }
}