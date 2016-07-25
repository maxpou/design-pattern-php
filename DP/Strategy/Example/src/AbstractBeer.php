<?php

namespace Strategy;

use Strategy\DrinkBehavior\DrinkBehaviorInterface;

/**
 * Abstract Beer is the context
 */
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
