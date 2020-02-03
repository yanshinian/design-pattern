<?php

include_once 'State.php';
include_once 'EventingState.php';

class AfternoonState extends State
{
    public function writeProgram(Work $w): void
    {
        if ($w->getHour() < 17) {
            printf("当前时间：%d 点  下午状态不错，继续努力。" . PHP_EOL, $w->getHour());
        } else {
            $w->setState(new EventingState());
            $w->writeProgram();
        }
    }
}
