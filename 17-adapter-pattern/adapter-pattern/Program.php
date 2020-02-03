<?php
include_once 'Forwards.php';
include_once 'Center.php';
include_once 'Guards.php';
include_once 'Translator.php';

class Program
{
    public static function main() :void
    {
        $b = new Forwards('巴蒂尔');
        $b->attack();
        $m = new Guards('麦克格雷迪');
        $m->attack();
        $ym = new Translator('姚明');
        $ym->attack();
        $ym->defense();
    }
}

Program::main();
