<?php

include_once 'Context.php';
include_once 'ConcreteStrategyA.php';
include_once 'ConcreteStrategyB.php';
include_once 'ConcreteStrategyC.php';

class Program
{
    public static function main()
    {
        $context = new Context(new ConcreteStrategyA());
        $context->contextInterface();

        $context = new Context(new ConcreteStrategyB());
        $context->contextInterface();

        $context = new Context(new ConcreteStrategyC());
        $context->contextInterface();
    }
}

Program::main();
