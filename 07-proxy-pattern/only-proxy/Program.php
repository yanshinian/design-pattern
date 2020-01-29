<?php
include_once 'Proxy.php';
include_once 'SchoolGirl.php';

class Program
{
    public static function main()
    {
        $jiaojiao = new SchoolGirl();
        $jiaojiao->name = '李娇娇';

        $dali = new Proxy($jiaojiao);

        $dali->giveDolls();
        $dali->giveFlowers();
        $dali->giveChocolate();
    }
}

Program::main();
