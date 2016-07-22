<?php

namespace Strategy\DrinkBehavior;

class DrinkNoAlcoholBeer implements DrinkBehaviorInterface
{
    /**
     * @return string
     */
    public function drink()
    {
        return "Oh it's shitty!";
    }
}
