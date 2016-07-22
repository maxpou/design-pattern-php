<?php

namespace Strategy\DrinkBehavior;

class DrinkStrongBeer implements DrinkBehaviorInterface
{
    /**
     * @return string
     */
    public function drink()
    {
        return "Damn, I can't drive !";
    }
}
