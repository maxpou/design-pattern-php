<?php

namespace NullObject;

abstract class AbstractBar
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $address;

    abstract protected function getName();
    abstract protected function getAddress();
}
