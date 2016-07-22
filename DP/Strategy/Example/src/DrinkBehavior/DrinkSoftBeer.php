<?php

namespace Strategy\DrinkBehavior;

class DrinkSoftBeer implements DrinkBehaviorInterface
{
    /**
     * @return string
     */
    public function drink()
    {
        return "I feel dehydrated and I'm Ok!";
    }
}
