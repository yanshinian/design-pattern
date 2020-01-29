<?php
include_once 'TestPaperA.php';
include_once 'TestPaperB.php';

class Program
{
    public static function main() :void
    {
        print_r('学生甲抄的试卷'.PHP_EOL);
        $studentA = new TestPaperA();
        $studentA->testQuestion1();
        $studentA->testQuestion2();
        $studentA->testQuestion3();

        print_r('学生乙抄的试卷：'.PHP_EOL);
        $studentB = new TestPaperB();
        $studentB->testQuestion1();
        $studentB->testQuestion2();
        $studentB->testQuestion3();
    }
}

Program::main();
