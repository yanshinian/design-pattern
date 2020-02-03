<?php

include_once 'State.php';
include_once 'SleepingState.php';
include_once 'RestState.php';

class EventingState extends State
{
    public function writeProgram(Work $w): void
    {
        if ($w->getFinish()) {
            $w->setState(new RestState());
            $w->writeProgram();
        } else {
            if ($w->getHour() < 21) {
                printf("当前时间：%d 点  加班哦，疲惫之极。" . PHP_EOL, $w->getHour());
            } else {
                $w->setState(new SleepingState());
                $w->writeProgram();
            }
        }
    }
}
