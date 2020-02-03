<?php

include_once 'Command.php';

class BakeChickenWingCommand extends Command
{
    public function __construct(Barbecuer $receiver)
    {
        parent::__construct($receiver);
    }

    public function excuteCommand(): void
    {
        $this->receiver->bakeChickenWing();
    }
}
