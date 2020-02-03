<?php
include_once 'Concrete.php';

class Program
{
    public static function main() :void
    {
        $c = new Concrete();
        foreach ($c as $k=>$v) {
            print_r('key='.$k.'=> value'.$v.PHP_EOL);
        }
    }
}

Program::main();
