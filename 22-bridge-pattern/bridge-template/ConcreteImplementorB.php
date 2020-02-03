<?php

include_once 'Implementor.php';

class ConcreteImplementorB extends Implementor
{
    public function operation(): void
    {
        print_r('具体实现 B 的方法执行'.PHP_EOL);
    }
}
