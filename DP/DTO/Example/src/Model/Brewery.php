<?php

namespace DTO\Model;

class Brewery
{
    /** @var string */
    private $name;

    /** @var string */
    private $location;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        return $this->location = $location;
    }
}
