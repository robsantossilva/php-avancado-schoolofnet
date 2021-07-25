<?php 

namespace Robson\Solid\Tags; 

interface TagListInterface extends TagInterface{
    public function list(): array;
}