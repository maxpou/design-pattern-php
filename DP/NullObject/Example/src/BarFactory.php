<?php

namespace NullObject;

class BarFactory
{
    private static $availableBars = [
        //BarName               => address
        "Delirium Bar"          => "Brussels",
        "The Three Broomsticks" => "Hogsmeade"
    ];

    public static function getBar($barName)
    {
        if (array_key_exists($barName, self::$availableBars)) {
            return new RealBar($barName, self::$availableBars[$barName]);
        }

        return new NullBar();
    }
}
