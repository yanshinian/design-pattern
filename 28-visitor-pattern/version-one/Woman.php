<?php

include_once 'Person.php';

class Woman extends Person
{
    // 得到结论或反应
    public function getConclusion()
    {
        if ($this->getAction() === '成功') {
            printf('%s %s 时，背后大多有一个不成功的男人'.PHP_EOL, self::class, $this->getAction());
        } elseif ($this->getAction() === '失败') {
            printf('%s %s 时，眼泪汪汪，谁也劝不了。'.PHP_EOL, self::class, $this->getAction());
        } elseif ($this->getAction() === '恋爱') {
            printf('%s %s 时，遇事懂也装作不懂。'.PHP_EOL, self::class, $this->getAction());
        }
    }
}
