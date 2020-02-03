<?php


class RestState extends State
{
    public function writeProgram(Work $w): void
    {
        printf("当前时间：%d 点 下班回家了".PHP_EOL, $w->getHour());
    }
}
