<?php
include_once 'AbstractClass.php';

class ConcreteClassA extends AbstractClass
{
    public function primitiveOperation1(): void
    {
        print_r('具体类 A 方法 1 实现'.PHP_EOL);
    }

    public function primitiveOperation2(): void
    {
        print_r('具体类 A 方法 2 实现'.PHP_EOL);
    }
}
