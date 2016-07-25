<?php

namespace Observer;

class Brewery implements SubjectInterface
{
    private $name;
    private $observers = array();
    private $lastBeer;

    public function __construct($name)
    {
        $this->name = $name;
    }

    //add observer
    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    //remove observer
    public function detach(ObserverInterface $observer)
    {
        $key = array_search($observer, $this->observers);

        if($key !== false) {
            unset($this->observers[$key]);
        }
    }

    //set breakouts news
    public function brewANewBeer($beerName)
    {
        $this->lastBeer = $beerName;
        $this->notify();
    }

    public function getLastNews()
    {
        return $this->name." brew a new Beer: ".$this->lastBeer."!";
    }

    //notify observers(or some of them)
    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}
