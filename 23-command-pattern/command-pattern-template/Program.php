<?php

include_once 'Receiver.php';
include_once 'Invoker.php';
include_once 'ConcreteCommand.php';

class Program
{
    public static function main() :void
    {
        $r = new Receiver();
        $c = new ConcreteCommand($r);
        $i = new Invoker();
        $i->setCommand($c);
        $i->executeCommand();
    }
}

Program::main();
