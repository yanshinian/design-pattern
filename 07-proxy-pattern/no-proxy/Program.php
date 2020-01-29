<?php
include_once 'Pursuit.php';
include_once 'SchoolGirl.php';

class Program
{
    public static function main()
    {
        $jiaojiao = new SchoolGirl();
        $jiaojiao->name = '李娇娇';

        $zhuojiayi = new Pursuit($jiaojiao);

        $zhuojiayi->giveDolls();
        $zhuojiayi->giveFlowers();
        $zhuojiayi->giveChocolate();
    }
}

Program::main();
