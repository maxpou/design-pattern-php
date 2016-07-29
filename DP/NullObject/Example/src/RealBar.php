<?php

namespace NullObject;

class RealBar extends AbstractBar
{
    public function __construct($name, $address)
    {
        $this->name    = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
