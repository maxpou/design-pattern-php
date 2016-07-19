<?php

namespace State;

use State\CarState\MoveCarState;
use State\CarState\StopCarState;
use State\CarState\StartCarState;
use State\CarState\CarStateInterface;

class Car
{
    /** @var CarStateInterface */
    private $state;

    function __construct(CarStateInterface $state)
    {
        $this->setState($state);
    }

    private function setState(CarStateInterface $state)
    {
        $this->state = $state;
    }

    public function start()
    {
        $this->setState($this->state->start());
    }

    public function move()
    {
        $this->setState($this->state->move());
    }

    public function stop()
    {
        $this->setState($this->state->stop());
    }

    /**
     * @return bool
     */
    public function isStarted()
    {
        return $this->state instanceof StartCarState;
    }

    /**
     * @return bool
     */
    public function isMoving()
    {
        return $this->state instanceof MoveCarState;
    }

    /**
     * @return bool
     */
    public function isStopped()
    {
        return $this->state instanceof StopCarState;
    }
}
