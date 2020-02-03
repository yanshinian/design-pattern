<?php
include_once 'Target.php';
include_once 'Adapter.php';

class Program
{
    public static function main() :void
    {
        $target = new Adapter();
        $target->request();
    }
}

Program::main();
