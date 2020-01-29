<?php


class ConcreteStrategyA extends Strategy
{
    // 算法A实现方法
    public function algorithmInterface()
    {
        print_r('算法A的实现'.PHP_EOL);
    }
}
