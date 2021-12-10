<?php

namespace SON\Command;

//podia implementar uma interface
class TurnOnReceiver implements Receiver
{
    public function command(){
        return "Turn On";
    }
}
