<?php

namespace Observer;

class Bar implements ObserverInterface
{
    /** @var string */
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(SubjectInterface $subject)
    {
        echo 'Hey '.$this->name.', '.$subject->getLastNews();
    }
}
