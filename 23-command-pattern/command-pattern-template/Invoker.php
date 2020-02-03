<?php

include_once 'Command.php';

class Invoker
{
    private Command $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function executeCommand() :void
    {
        $this->command->execute();
    }
}
