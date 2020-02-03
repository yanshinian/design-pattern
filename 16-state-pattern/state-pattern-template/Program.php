<?php
include_once 'ConcreteStateA.php';
include_once 'Context.php';

class Program
{
    public static function main() :void
    {
        $c = new Context(new ConcreteStateA());

        $c->request();
        $c->request();
        $c->request();
        $c->request();
    }
}
Program::main();
