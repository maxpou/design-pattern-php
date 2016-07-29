<?php

namespace NullObject\Tests;

use NullObject\BarFactory;
use NullObject\NullBar;
use NullObject\RealBar;

class NullObjectFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * First part: NullObject + Factory
     */

    public function testFactoryGetRealObjectFromString()
    {
        $bar = BarFactory::getBar("Delirium Bar");
        $this->assertEquals($bar->getName(), "Delirium Bar");
        $this->assertEquals($bar->getAddress(), "Brussels");

        $bar = BarFactory::getBar("The Three Broomsticks");
        $this->assertEquals($bar->getName(), "The Three Broomsticks");
        $this->assertEquals($bar->getAddress(), "Hogsmeade");
    }

    public function testFactoryCreateANullObjectIfNotFound()
    {
        $bar = BarFactory::getBar("A Bar which is not in batabase");
        $this->assertEquals($bar->getName(), "Attribute name isn't available");
        $this->assertEquals($bar->getAddress(), "Attribute address isn't available");
    }
}
