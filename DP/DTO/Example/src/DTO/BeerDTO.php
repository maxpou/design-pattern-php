<?php

namespace DTO\DTO;

use DTO\Model\Beer;

class BeerDTO
{
    /** @var string */
    public $name;

    /** @var string */
    public $brewery;

    function __construct(Beer $beer)
    {
        $this->name    = $beer->getName();
        $this->brewery = $beer->getBrewery()->getName()." in (".$beer->getBrewery()->getLocation().")";
    }

    public function parseToJson()
    {
        $jsonArray = [
            "name"    => $this->name,
            "brewery" => $this->brewery
        ];

        return json_encode($jsonArray, JSON_FORCE_OBJECT);
    }
}
