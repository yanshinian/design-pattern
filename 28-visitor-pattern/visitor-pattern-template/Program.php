<?php

include_once 'ObjectStructure.php';
include_once 'ConcreteElementA.php';
include_once 'ConcreteElementB.php';
include_once 'ConcreteVisitor1.php';
include_once 'ConcreteVisitor2.php';

class Program
{
    public static function main() :void
    {
        $o = new ObjectStructure();
        $o->attach(new ConcreteElementA());
        $o->attach(new ConcreteElementB());

        // 成功时的反应
        $v1 = new ConcreteVisitor1();
        $o->accept($v1);
        // 失败时的反应
        $v2 = new ConcreteVisitor2();
        $o->accept($v2);
    }
}

Program::main();
