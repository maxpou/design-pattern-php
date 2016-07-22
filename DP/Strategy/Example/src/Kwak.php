<?php

namespace Strategy;

use Strategy\DrinkBehavior\DrinkStrongBeer;

class Kwak extends AbstractBeer
{
    function __construct()
    {
        $this->setBeerBehavior(new DrinkStrongBeer());
    }
}
