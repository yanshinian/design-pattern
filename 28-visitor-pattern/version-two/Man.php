<?php

include_once 'Person.php';

class Man extends Person
{
    public function accept(Action $visitor): void
    {
        $visitor->getManConclusion($this);
    }
}
