<?php

include_once 'Action.php';

class Success extends Action
{
    public function getManConclusion(Man $concreteElementA)
    {
        printf('%s %s 时，背后多半有一个伟大的女人'.PHP_EOL, Man::class, self::class);
    }

    public function getWomanConclusion(Woman $concreteElementB)
    {
        printf('%s %s 时，背后多半有一个伟大的女人'.PHP_EOL, Man::class, self::class);
    }
}
