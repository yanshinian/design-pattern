<?php

include_once 'Secretary.php';
include_once 'StockObserver.php';

class Program
{
    public static function main() :void
    {
        // 前台小姐 童子喆
        $tongzizhe = new Secretary();
        // 看股票的同事
        $tongshi1 = new StockObserver('魏关姹', $tongzizhe);
        $tongshi2 = new StockObserver('易管查', $tongzizhe);

        // 前台记下了两位同事
        $tongzizhe->attach($tongshi1);
        $tongzizhe->attach($tongshi2);

        // 发现老板回来
        $tongzizhe->setAction('老板回来了！');

        // 通知两个同事
        $tongzizhe->notify();
    }
}

Program::main();
