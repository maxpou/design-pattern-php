<?php

namespace DTO\Model;

use DTO\Model\Brewery;

class Beer
{
    /** @var string */
    private $name;

    /** @var float */
    private $alcohol;

    /** @var Brewery */
    private $brewery;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getAlcohol()
    {
        return $this->alcohol;
    }

    public function setAlcohol($alcohol)
    {
        return $this->alcohol = $alcohol;
    }

    public function getBrewery()
    {
        return $this->brewery;
    }

    public function setBrewery(Brewery $brewery)
    {
        return $this->brewery = $brewery;
    }
}
