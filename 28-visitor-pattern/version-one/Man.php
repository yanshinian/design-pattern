<?php

include_once 'Person.php';

class Man extends Person
{
    // 得到结论 或 反应
    public function getConclusion()
    {
        if ($this->getAction() === '成功') {
            printf('%s %s 时，背后多半有一个伟大的人'.PHP_EOL, self::class, $this->getAction());
        } elseif ($this->getAction() === '失败') {
            printf('%s %s 时，闷头喝酒，谁也不用劝。'.PHP_EOL, self::class, $this->getAction());
        } elseif ($this->getAction() === '恋爱') {
            printf('%s %s 时，凡事不懂也要装懂。'.PHP_EOL, self::class, $this->getAction());
        }
    }
}
