<?php
include_once 'SimpleFactory.php';

class Program
{
    public static function main()
    {
        $studentA = SimpleFactory::createLeiFeng('学雷锋的大学生');
        $studentA->buyRice();
        $studentB = SimpleFactory::createLeiFeng('学雷锋的大学生');
        $studentB->sweep();
        $studentC = SimpleFactory::createLeiFeng('学雷锋的大学生');
        $studentC->wash();
    }
}

Program::main();
