<?php 

namespace Robson\Solid\Tags;

class Ul implements TagListInterface {

    function __construct(array $items)
    {
        $this->items = $items;
    }

    public function render(): string{
        $ul  = '<ul>';
        foreach($this->items as $i){
            $ul .= '<li>'.$i.'</li>';
        }
        $ul .= '</ul>';
        return $ul;
    }

    public function list(): array{
        return $this->items;
    }
}