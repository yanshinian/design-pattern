<?php


class ConcreteStrategyB extends Strategy
{
    public function algorithmInterface()
    {
        print_r('算法B实现'.PHP_EOL);
    }
}
