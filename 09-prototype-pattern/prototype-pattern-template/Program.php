<?php
include_once 'ConcretePrototype1.php';

class Program
{
    public static function main() :void
    {
        $p1 = new ConcretePrototype1('I');
        $c1 = clone $p1;
        print_r('Cloned: '.$c1->id.PHP_EOL);
    }
}

Program::main();
