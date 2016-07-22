<?php

namespace Strategy;

use Strategy\DrinkBehavior\DrinkNoAlcoholBeer;

class Tourtel extends AbstractBeer
{
    function __construct()
    {
        $this->setBeerBehavior(new DrinkNoAlcoholBeer());
    }
}
