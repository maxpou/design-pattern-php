<?php

namespace NullObject;

class NullBar extends AbstractBar
{
    public function getName()
    {
        return "Attribute name isn't available";
    }

    public function getAddress()
    {
        return "Attribute address isn't available";
    }
}
