<?php

include_once 'Action.php';

class Marriage extends Action
{
    public function getManConclusion(Man $concreteElementA)
    {
        printf('%s %s 时，感慨道：恋爱游戏终结时，‘有妻徒刑‘ 遥无期。'.PHP_EOL, Man::class, self::class);
    }

    public function getWomanConclusion(Woman $concreteElementB)
    {
        printf('%s %s 时，欣慰曰：爱情长跑路漫漫，婚姻保险保平安。'.PHP_EOL, Man::class, self::class);
    }
}
