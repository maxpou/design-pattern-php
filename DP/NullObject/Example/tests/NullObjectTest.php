<?php

namespace NullObject\Tests;

use NullObject\NullBar;
use NullObject\RealBar;

class NullObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * First part: NullObject
     */

    public function testRealObjectPropertiesAreReachable()
    {
        $realBar = new RealBar("The Three Broomsticks", "Hogsmeade");
        $this->assertEquals($realBar->getName(), "The Three Broomsticks");
        $this->assertEquals($realBar->getAddress(), "Hogsmeade");
    }

    public function testNullObjectIsReachableToo()
    {
        $realBar = new NullBar();
        $this->assertEquals($realBar->getName(), "Attribute name isn't available");
        $this->assertEquals($realBar->getAddress(), "Attribute address isn't available");
    }
}
