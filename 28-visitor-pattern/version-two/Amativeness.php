<?php

include_once 'Action.php';

class Amativeness extends Action
{
    public function getManConclusion(Man $concreteElementA)
    {
        printf('%s %s 时，凡事不懂也要装懂。'.PHP_EOL, Man::class, self::class);
    }

    public function getWomanConclusion(Woman $concreteElementB)
    {
        printf('%s %s 时，遇事懂也装作不懂。'.PHP_EOL, Man::class, self::class);
    }
}
