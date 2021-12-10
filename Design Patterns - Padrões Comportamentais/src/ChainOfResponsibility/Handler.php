<?php

namespace SON\ChainOfResponsibility;

abstract class Handler
{
    
    private $successor;

    //opcional
    public function successor(Handler $successor)
    {
        $this->successor = $successor;
    }

    protected abstract function execute();

    public function handlerRequest()
    {
        $this->execute();

        if ($this->successor) {
            $this->successor->handlerRequest();
        }
    }

    //minha implementação
    public function next()
    {
        return $this->successor;
    }
}
