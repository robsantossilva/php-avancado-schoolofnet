<?php

namespace SON\State\DoorStates;

use SON\State\IllegalStateTransitionException;

abstract class AbstractDoorState implements DoorState
{
    /**
     * @throws IllegalStateTransitionException
     */
    public function open()
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function close()
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function lock()
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function unlock()
    {
        throw new IllegalStateTransitionException;
    }
}
