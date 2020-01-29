<?php

include 'Operation.php';

class Program
{
    public static function main()
    {
        try {
            fwrite(STDOUT, '请输入数字A:');

            $a = rtrim(fgets(STDIN));

            fwrite(STDOUT, '请选择运算符号(+、-、*、/)：');

            $operator = rtrim(fgets(STDIN));

            fwrite(STDOUT, '请输入数字B:');

            $b = rtrim(fgets(STDIN));

//            var_dump(doubleval($a));// 却为何还是float ，在php 中float 跟double没有区别
//            var_dump((double)$b);
            $res = Operation::getResult((float)$a, (float)$b, $operator);

            print_r('result：'.$res.PHP_EOL);
        } catch (Exception $e) {
            print_r('程序计算有误:'.$e->getMessage().PHP_EOL);
        }
    }
}

Program::main();
