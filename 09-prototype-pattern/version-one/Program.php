<?php
include_once 'Resume.php';

class Program
{
    public static function main() :void
    {
        $a = new Resume('大鸟');
        $a->setPersonalInfo('男', 29);
        $a->setWorkExperience('1998-2000', 'xx 公司');

        $b = new Resume('大鸟');
        $b->setPersonalInfo('男', 29);
        $b->setWorkExperience('1998-2000', 'xx 公司');

        $c = new Resume('大鸟');

        $c->setPersonalInfo('男', 29);
        $c->setWorkExperience('1998-2001', 'xx 公司');

        $a->display();
        $b->display();
        $c->display();
    }
}

Program::main();
