<?php
include_once 'UndergraduateFactory.php';
include_once 'VolunteerFactory.php';

class Program
{
    public static function main() :void
    {
        $factory = new UndergraduateFactory();
        $student = $factory->createLeiFeng();

        $student->buyRice();
        $student->sweep();
        $student->wash();
    }
}

Program::main();
