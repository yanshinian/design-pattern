<?php

include_once 'State.php';
include_once 'AfternoonState.php';

class NoonState extends State
{
    public function writeProgram(Work $w): void
    {
        if ($w->getHour() < 13) {
            printf("当前时间：%d 点 饿了, 午饭：犯困，午休。" . PHP_EOL, $w->getHour());
        } else {
            $w->setState(new AfternoonState());
            $w->writeProgram();
        }
    }
}
