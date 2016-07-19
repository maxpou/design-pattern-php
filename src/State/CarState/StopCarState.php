<?php

namespace State\CarState;

class StopCarState extends AbstractCarState
{
    /**
     * @return StartCarState
     */
    public function start()
    {
        return new StartCarState;
    }
}
