<?php

namespace State\CarState;

abstract class AbstractCarState implements CarStateInterface
{
    public function start()
    {
        throw new \Exception("Illegal state transition");
    }

    public function move()
    {
        throw new \Exception("Illegal state transition");
    }

    public function stop()
    {
        throw new \Exception("Illegal state transition");
    }
}
