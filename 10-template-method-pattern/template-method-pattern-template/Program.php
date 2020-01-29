<?php
include_once 'ConcreteClassA.php';
include_once 'ConcreteClassB.php';

class Program
{
    public static function main() :void
    {
        $c = new ConcreteClassA();
        $c->templateMethod();

        $c = new ConcreteClassB();
        $c->templateMethod();
    }
}


Program::main();
