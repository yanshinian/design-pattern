<?php
include_once 'Resume.php';

class Program
{
    public static function main() :void
    {
        $a = new Resume('大鸟');
        $a->setPersonalInfo('男', 29);
        $a->setWorkExperience('1998-2000', 'xx 公司');

        $b = clone $a;
        $b->setPersonalInfo('男', 29);
        $b->setWorkExperience('2001-2002', 'xx 企业');

        $c = clone $a;
        $c->setPersonalInfo('男', 29);

        $a->display();
        $b->display();
        $c->display();
    }
}

Program::main();
