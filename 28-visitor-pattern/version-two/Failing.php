<?php

include_once 'Action.php';

class Failing extends Action
{
    public function getManConclusion(Man $concreteElementA)
    {
        printf('%s %s 时，闷头喝酒，谁也不用劝。'.PHP_EOL, Man::class, self::class);
    }

    public function getWomanConclusion(Woman $concreteElementB)
    {
        printf('%s %s 时，眼泪汪汪，谁也劝不了。'.PHP_EOL, Man::class, self::class);
    }
}
