<?php
include_once 'ConcreteAggregate.php';
include_once 'ConcreteIterator.php';
include_once 'ConcreteIteratorDesc.php';

class Program
{
    public static function main() :void
    {
        $a = new ConcreteAggregate();

        $a[0] = '大鸟';
        $a[1] = '小菜';
        $a[2] = '行李';
        $a[3] = '老外';
        $a[4] = '小偷';
//        $i = new ConcreteIterator($a);
        $i = $a->createIterator();

        $item = $i->first();
        while (!$i->isDone()) {
            print_r($i->currentItem().' 请买车票'.PHP_EOL);
            $i->next();
        }

        print_r('-----上面是正序遍历，下面是倒序遍历'.PHP_EOL);

        $a = new ConcreteAggregate();

        $a[0] = '大鸟';
        $a[1] = '小菜';
        $a[2] = '行李';
        $a[3] = '老外';
        $a[4] = '小偷';
        $i = new ConcreteIteratorDesc($a);

        $item = $i->first();
        while (!$i->isDone()) {
            print_r($i->currentItem().' 请买车票'.PHP_EOL);
            $i->next();
        }
    }
}

Program::main();
