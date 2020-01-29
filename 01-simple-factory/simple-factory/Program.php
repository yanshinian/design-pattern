<?php
include 'OperationFactory.php';

class Program
{
    public static function main()
    {
        fwrite(STDOUT, '请输入数字A:');

        $a = rtrim(fgets(STDIN));

        fwrite(STDOUT, '请选择运算符号(+、-、*、/)：');

        $operator = rtrim(fgets(STDIN));

        fwrite(STDOUT, '请输入数字B:');

        $b = rtrim(fgets(STDIN));
        $oper = OperationFactory::createOperate($operator);
        $oper->numberA = $a;
        $oper->numberB = $b;

        $res = $oper->getResult();
        print_r('result：'.$res.PHP_EOL);
    }
}

Program::main();
