<?php

namespace Observer\Tests;

use Observer\Bar;
use Observer\Brewery;

class ObserverTest extends \PHPUnit_Framework_TestCase
{
    public function testNothingAppendIfNoObservers()
    {
        $duvel = new Brewery("Duvel Moortgat Brewery");
        $duvel->brewANewBeer("Duvel Tripel Hop");
        $this->expectOutputString("");
    }

    public function testRaiseNotificationIfObservers()
    {
        $duvel   = new Brewery("Duvel Moortgat Brewery");
        $delirum = new Bar("Delirium Bar");
        $duvel->attach($delirum);
        $duvel->brewANewBeer("Duvel Tripel Hop");

        $this->expectOutputString("Hey Delirium Bar, Duvel Moortgat Brewery brew a new Beer: Duvel Tripel Hop!");
    }

    public function testRaiseMultipleNotificationIfManyObservers()
    {
        $duvel   = new Brewery("Duvel Moortgat Brewery");

        $delirum = new Bar("Delirium Bar");
        $twist   = new Bar("The Twist");
        $duvel->attach($delirum);
        $duvel->attach($twist);

        $duvel->brewANewBeer("Duvel Tripel Hop");

        $this->expectOutputString("Hey Delirium Bar, Duvel Moortgat Brewery brew a new Beer: Duvel Tripel Hop!Hey The Twist, Duvel Moortgat Brewery brew a new Beer: Duvel Tripel Hop!");
    }

    public function testDontRaiseNotificationIfObserverIsDetached()
    {
        $duvel   = new Brewery("Duvel Moortgat Brewery");

        $delirum = new Bar("Delirium Bar");
        $duvel->attach($delirum);
        $duvel->detach($delirum);

        $duvel->brewANewBeer("Duvel Tripel Hop");

        $this->expectOutputString("");
    }
}
