<?php

include_once 'Person.php';
include_once 'Man.php';
include_once 'Woman.php';

class Program
{
    public static function main() :void
    {
        $persons = [];

        $man1 = new Man();
        $man1->setAction('成功');
        $persons[] = $man1;

        $woman1 = new Woman();
        $woman1->setAction('成功');
        $persons[] = $woman1;

        $man2 = new Man();
        $man2->setAction('失败');
        $persons[] = $man2;

        $woman2 = new Woman();
        $woman2->setAction('失败');
        $persons[] = $woman2;

        $man3 = new Man();
        $man3->setAction('恋爱');
        $persons[] = $man2;

        $woman3 = new Woman();
        $woman3->setAction('恋爱');
        $persons[] = $woman3;

        foreach ($persons as $p) {
            $p->getConclusion();
        }
    }
}

Program::main();
