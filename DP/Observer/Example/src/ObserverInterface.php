<?php

namespace Observer;

interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}
