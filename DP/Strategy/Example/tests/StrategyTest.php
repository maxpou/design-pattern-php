<?php

namespace Strategy\Tests;

use Strategy\Heineken;
use Strategy\Kwak;
use Strategy\Tourtel;

class StrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testAfterDrinkingTourtelIThrowItOutTheWindow()
    {
        $tourtel = new Tourtel();
        $this->assertEquals($tourtel->applyDrink(), "Oh it's shitty!");
    }

    public function testAfterDrinkingHeinekenIFeelDehydratedAndOk()
    {
        $heineken = new Heineken();
        $this->assertEquals($heineken->applyDrink(), "I feel dehydrated and I'm Ok!");
    }

    public function testAfterDrinkingKwakICannotDrive()
    {
        $kwak = new Kwak();
        $this->assertEquals($kwak->applyDrink(), "Damn, I can't drive !");
    }
}
