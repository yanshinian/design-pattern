<?php
include_once 'State.php';
include_once 'NoonState.php';

class ForenoonState extends State
{
    public function writeProgram(Work $w): void
    {
        if ($w->getHour() < 12) {
            printf("当前时间：%d 点 上午工作，精神百倍" . PHP_EOL, $w->getHour());
        } else {
            $w->setState(new NoonState());
            $w->writeProgram();
        }
    }
}
