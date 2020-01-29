<?php


class ConcreteStrategyC extends Strategy
{
    public function algorithmInterface()
    {
        print_r('算法C实现'.PHP_EOL);
    }
}
