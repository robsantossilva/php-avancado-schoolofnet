<?php 

namespace Robson\Solid\Tags;

class A implements TagInterface {

    function __construct(string $href, string $anchor)
    {
        $this->href = $href;
        $this->anchor = $anchor;
    }

    public function render(): string{
        return '<a href="'.$this->href.'">'.$this->anchor.'</a>';
    }
}