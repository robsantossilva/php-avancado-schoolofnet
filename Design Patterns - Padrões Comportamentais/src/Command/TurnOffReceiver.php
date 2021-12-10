<?php

namespace SON\Command;

//podia implementar uma interface
class TurnOffReceiver implements Receiver
{
    public function command(){
        return "Turn Off";
    }
}
