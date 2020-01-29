<?php

include_once 'AbstractClass.php';

class ConcreteClassB extends AbstractClass
{
    public function primitiveOperation1(): void
    {
        print_r('具体类 B 方法 1 实现'.PHP_EOL);
    }

    public function primitiveOperation2(): void
    {
        print_r('具体类 B 方法 2 实现'.PHP_EOL);
    }
}
