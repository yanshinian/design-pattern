<?php

include_once 'Command.php';

class ConcreteCommand extends Command
{
    public function __construct(Receiver $receiver)
    {
        parent::__construct($receiver);
    }

    public function execute()
    {
        $this->receiver->action();
    }
}
