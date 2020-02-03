<?php

include_once 'ObjectStructure.php';
include_once 'Man.php';
include_once 'Woman.php';
include_once 'Failing.php';
include_once 'Success.php';
include_once 'Amativeness.php';
include_once 'Marriage.php';

class Program
{
    public static function main() :void
    {
        $o = new ObjectStructure();
        $o->attach(new Man());
        $o->attach(new Woman());

        // 成功时的反应
        $v1 = new Success();
        $o->display($v1);
        // 失败时的反应
        $v2 = new Failing();
        $o->display($v2);

        // 恋爱的反应
        $v3 = new Amativeness();
        $o->display($v3);

        // 婚姻的反应
        $v4 = new Marriage();
        $o->display($v4);
    }
}

Program::main();
