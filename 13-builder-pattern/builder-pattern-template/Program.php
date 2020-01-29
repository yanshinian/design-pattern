<?php
include_once 'Director.php';
include_once 'ConcreteBuilder1.php';
include_once 'ConcreteBuilder2.php';

class Program
{
    public static function main() :void
    {
        $director = new Director();
        $b1 = new ConcreteBuilder1();
        $b2 = new ConcreteBuilder2();
        $director->setBuilder($b1);
        $p1 = $b1->getResult();
        $p1->show();

        $director->setBuilder($b2);
        $p2 = $b2->getResult();
        $p2->show();
    }
}

Program::main();
