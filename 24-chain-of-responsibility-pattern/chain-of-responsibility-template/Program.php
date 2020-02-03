<?php
include_once 'ConcreteHandler1.php';
include_once 'ConcreteHandler2.php';
include_once 'ConcreteHandler3.php';

class Program
{
    public static function main() :void
    {
        $h1 = new ConcreteHandler1();
        $h2 = new ConcreteHandler2();
        $h3 = new ConcreteHandler3();
        $h1->setSuccessor($h2);
        $h2->setSuccessor($h3);

        $requests = [2, 5, 14, 22, 18, 3, 27, 20];

        foreach ($requests as $request) {
            $h1->handleRequest($request);
        }
    }
}

Program::main();
