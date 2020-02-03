<?php

include_once 'Command.php';

class BakeMuttonCommand extends Command
{
    public function __construct(Barbecuer $receiver)
    {
        parent::__construct($receiver);
    }

    public function excuteCommand(): void
    {
        $this->receiver->bakeMutton();
    }
}
