<?php

namespace Strategy;

use Strategy\DrinkBehavior\DrinkBehaviorInterface;

abstract class AbstractBeer
{
    /**  @var DrinkBehaviorInterface */
    private $iBeerBehavior;

    public function applyDrink()
    {
        return $this->iBeerBehavior->drink();
    }

    public function setBeerBehavior(DrinkBehaviorInterface $beerBehaviorType)
    {
        $this->iBeerBehavior = $beerBehaviorType;
    }
}
