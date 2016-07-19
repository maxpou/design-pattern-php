<?php

namespace State\CarState;

class MoveCarState extends AbstractCarState
{
    /**
     * @return StopCarState
     */
    public function stop()
    {
        return new StopCarState;
    }
}
