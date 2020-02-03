<?php

include_once 'UnitedNationsSecurityCount1.php';
include_once 'USA.php';
include_once 'Iraq.php';

class Program
{
    public static function main() :void
    {
        $un  = new UnitedNationsSecurityCount1();

        $usa = new USA($un);
        $iraq = new Iraq($un);

        $un->setColleague1($usa);
        $un->setColleague2($iraq);

        $usa->declare('不准研制核武器，否则要发动战争！');
        $iraq->declare('我们没有核武器，也不怕侵略!');
    }
}

Program::main();
