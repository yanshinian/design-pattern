<?php

include_once 'SchoolGirl.php';
include_once 'Proxy.php';
class Program
{
    public static function main()
    {
        $jiaojiao = new SchoolGirl();
        $jiaojiao->name = '李娇娇';

        $daili = new Proxy($jiaojiao);
        $daili->giveDolls();
        $daili->giveFlowers();
        $daili->giveChocolate();
    }
}

Program::main();
