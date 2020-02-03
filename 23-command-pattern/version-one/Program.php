<?php
include_once 'Barbecuer.php';

class Program
{
    public static function main() :void
    {
        $boy = new Barbecuer();
        $boy->bakeMutton();
        $boy->bakeMutton();
        $boy->bakeMutton();
        $boy->bakeChickenWing();
        $boy->bakeMutton();
        $boy->bakeMutton();
        $boy->bakeChickenWing();
    }
}

Program::main();
