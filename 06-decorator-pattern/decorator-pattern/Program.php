<?php
include_once 'ConcreteDecoratorA.php';
include_once 'ConcreteDecoratorB.php';
include_once 'ConcreteComponent.php';

class Program
{
    public static function main()
    {
        $c = new ConcreteComponent();
        $d1 = new ConcreteDecoratorA();
        $d2 = new ConcreteDecoratorB();

        $d1->setComponent($c);
        $d2->setComponent($d1);
        $d2->operation();
    }
}

Program::main();
