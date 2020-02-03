<?php

include_once 'ConcreteSubject.php';
include_once 'ConcreteObserver.php';


class Program
{
    public static function main() :void
    {
        $s = new ConcreteSubject();
        $s->attach(new ConcreteObserver($s, 'X'));
        $s->attach(new ConcreteObserver($s, 'Y'));
        $s->attach(new ConcreteObserver($s, 'Z'));
        $s->setSubjectState('ABC');
        $s->notify();
    }
}

Program::main();
