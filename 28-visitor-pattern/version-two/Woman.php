<?php

include_once 'Person.php';

class Woman extends Person
{
    public function accept(Action $visitor): void
    {
        $visitor->getWomanConclusion($this);
    }
}
