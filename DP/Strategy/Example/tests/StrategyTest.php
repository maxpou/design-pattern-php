<?php

namespace Strategy\Tests;

use Strategy\Heineken;
use Strategy\Kwak;
use Strategy\Tourtel;

class StrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testAfterDrinkingTourtelIThrowItOutTheWindow()
    {
        $kwak = new Tourtel();
        $this->assertEquals($kwak->applyDrink(), "Oh it's shitty!");
    }

    public function testAfterDrinkingHeinekenIFeelDehydratedAndOk()
    {
        $kwak = new Heineken();
        $this->assertEquals($kwak->applyDrink(), "I feel dehydrated and I'm Ok!");
    }

    public function testAfterDrinkingKwakICannotDrive()
    {
        $kwak = new Kwak();
        $this->assertEquals($kwak->applyDrink(), "Damn, I can't drive !");
    }
}
