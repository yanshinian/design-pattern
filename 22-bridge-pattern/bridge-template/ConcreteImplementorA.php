<?php
include_once 'Implementor.php';

class ConcreteImplementorA extends Implementor
{
    public function operation(): void
    {
        print_r('具体实现 A 的方法执行'.PHP_EOL);
    }
}
