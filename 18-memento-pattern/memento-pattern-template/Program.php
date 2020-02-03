<?php
include_once 'Originator.php';
include_once 'Cretaker.php';

class Program
{
    public static function main() :void
    {
        $o = new Originator();
        $o->setState('On');
        $o->show();

        $c = new Cretaker();
        $c->setMemento($o->createMemento());

        $o->setState('Off');
        $o->show();

        $o->setMemento($c->getMemento());
        $o->show();
    }
}

Program::main();
