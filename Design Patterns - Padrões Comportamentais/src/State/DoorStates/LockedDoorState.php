<?php

namespace SON\State\DoorStates;

class LockedDoorState extends AbstractDoorState
{
    /**
     * @return ClosedDoorState
     */
    public function unlock()
    {
        return new ClosedDoorState;
    }
}
