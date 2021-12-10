<?php

namespace SON\Command;

abstract class Command
{

    private $receiver;

    function __construct(Receiver $receiver){
        $this->receiver = $receiver;
    }

    public function execute(){
        return $this->receiver->command();
    }
}
