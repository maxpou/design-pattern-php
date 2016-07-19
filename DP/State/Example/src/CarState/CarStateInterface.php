<?php

namespace State\CarState;

interface CarStateInterface
{
    public function start();
    public function move();
    public function stop();
}
