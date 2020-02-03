<?php

include_once 'ConcreteMediator.php';
include_once 'ConcreteColleague1.php';
include_once 'ConcreteColleague2.php';

class Program
{
    public static function main() :void
    {
        $m = new ConcreteMediator();

        $c1 = new ConcreteColleague1($m);
        $c2 = new ConcreteColleague2($m);

        $m->setColleague1($c1);
        $m->setColleague2($c2);

        $c1->send('吃过饭了吗？');
        $c2->send('没有呢，你打算请客？');
    }
}

Program::main();
