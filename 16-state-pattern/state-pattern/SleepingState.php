<?php

include_once 'State.php';
include_once 'Work.php';

class SleepingState extends State
{
    public function writeProgram(Work $w): void
    {
        printf("当前时间：%d 点不行了，睡着了。".PHP_EOL, $w->getHour());
    }
}
