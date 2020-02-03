<?php
include_once 'Receiver.php';

abstract class Command
{
    protected Receiver $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    abstract public function execute();
}
