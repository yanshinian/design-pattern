<?php
include_once 'State.php';
include_once 'ConcreteStateB.php';
class ConcreteStateA extends State
{
    public function handle(Context $context): void
    {
        $context->setState(new ConcreteStateB());
    }
}
