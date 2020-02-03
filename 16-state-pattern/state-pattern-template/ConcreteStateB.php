<?php

include_once 'State.php';
include_once 'ConcreteStateA.php';

class ConcreteStateB extends State
{
    public function handle(Context $context): void
    {
        $context->setState(new ConcreteStateA());
    }
}
