<?php

include_once 'Visitor.php';
include_once 'ConcreteElementA.php';
include_once 'ConcreteElementB.php';

class ConcreteVisitor2 extends Visitor
{
    public function visitConcreteElementA(ConcreteElementA $concreteElementA): void
    {
        printf('%s 被 %s 访问'.PHP_EOL, ConcreteElementA::class, self::class);
    }

    public function visitConcreteElementB(ConcreteElementB $concreteElementB): void
    {
        printf('%s 被 %s 访问'.PHP_EOL, ConcreteElementB::class, self::class);
    }
}
