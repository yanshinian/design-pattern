<?php
include_once 'ConcreteImplementorA.php';
include_once 'ConcreteImplementorB.php';
include_once 'RefinedAbstraction.php';

class Program
{
    public static function main() :void
    {
        $ab = new RefinedAbstraction();
        $ab->setImplementor(new ConcreteImplementorA());
        $ab->operation();

        $ab->setImplementor(new ConcreteImplementorB());
        $ab->operation();
    }
}

Program::main();
