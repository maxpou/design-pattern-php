<?php

namespace State\CarState;

class StartCarState extends AbstractCarState
{
    /**
     * @return StopCarState
     */
    public function stop()
    {
        return new StopCarState;
    }
    /**
     * @return MoveCarState
     */
    public function move()
    {
        return new MoveCarState;
    }
}
