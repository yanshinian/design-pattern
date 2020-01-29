<?php
include_once 'Facade.php';

class Program
{
    public static function main() :void
    {
        $facade = new Facade();
        $facade->methodA();
        $facade->methodB();
    }
}

Program::main();
