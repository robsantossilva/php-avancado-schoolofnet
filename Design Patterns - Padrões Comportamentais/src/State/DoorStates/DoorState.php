<?php

namespace SON\State\DoorStates;

interface DoorState
{
    public function open();
    public function close();
    public function lock();
    public function unlock();
}
