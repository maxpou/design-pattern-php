<?php

namespace Strategy;

use Strategy\DrinkBehavior\DrinkSoftBeer;

class Heineken extends AbstractBeer
{
    function __construct()
    {
        $this->setBeerBehavior(new DrinkSoftBeer());
    }
}
