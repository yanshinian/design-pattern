<?php

include_once 'Mediator.php';

abstract class Colleague
{
    protected Mediator $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
