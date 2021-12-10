<?php

namespace SON\State\DoorStates;

class ClosedDoorState extends AbstractDoorState
{
    /**
     * @return OpenDoorState
     */
    public function open()
    {
        return new OpenDoorState;
    }

    /**
     * @return LockedDoorState
     */
    public function lock()
    {
        return new LockedDoorState;
    }
}
