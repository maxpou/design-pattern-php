<?php

namespace Tests;

use State\Car;
use State\CarState\StopCarState;
use State\CarState\StartCarState;
use State\CarState\MoveCarState;

class StateTest extends \PHPUnit_Framework_TestCase
{
    /** @var $myTestcar Car */
    private $myTestcar;

    public function testCompleteScenario()
    {
        $this->myTestcar = new Car(new StopCarState());

        $this->assertTrue($this->myTestcar->isStopped());
        $this->assertFalse($this->myTestcar->isStarted());
        $this->assertFalse($this->myTestcar->isMoving());

        $this->myTestcar->start();
        $this->assertFalse($this->myTestcar->isStopped());
        $this->assertTrue($this->myTestcar->isStarted());
        $this->assertFalse($this->myTestcar->isMoving());

        $this->myTestcar->move();
        $this->assertFalse($this->myTestcar->isStopped());
        $this->assertFalse($this->myTestcar->isStarted());
        $this->assertTrue($this->myTestcar->isMoving());

        $this->myTestcar->stop();
        $this->myTestcar->start();
        $this->myTestcar->stop();
    }

    /**
     * Because you must start the car before
     * @expectedException \Exception
     */
    public function testCannotMoveWhenStop()
    {
        $this->myTestcar = new Car(new StopCarState());
        $this->myTestcar->move();
    }

    /**
     * Because you cannot stop a car already stopped
     * @expectedException \Exception
     */
    public function testCannotStopWhenStop()
    {
        $this->myTestcar = new Car(new StopCarState());
        $this->myTestcar->stop();
    }

    /**
     * Because you cannot start a car already started
     * @expectedException \Exception
     */
    public function testCannotStartWhenStart()
    {
        $this->myTestcar = new Car(new StartCarState());
        $this->myTestcar->start();
    }

    /**
     * Because you cannot start a car already started
     * @expectedException \Exception
     */
    public function testCannotMoveWhenMove()
    {
        $this->myTestcar = new Car(new moveCarState());
        $this->myTestcar->move();
    }

    /**
     * Because you cannot start a car which is already moving
     * @expectedException \Exception
     */
    public function testCannotStartWhenMove()
    {
        $this->myTestcar = new Car(new moveCarState());
        $this->myTestcar->start();
    }
}
