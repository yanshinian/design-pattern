<?php

class Program
{
    public function main()
    {
        try {
            fwrite(STDOUT, '请输入数字A:');

            $a = rtrim(fgets(STDIN));

            fwrite(STDOUT, '请选择运算符号(+、-、*、/)：');

            $operator = rtrim(fgets(STDIN));

            fwrite(STDOUT, '请输入数字B:');

            $b = rtrim(fgets(STDIN));

            switch ($operator) {
                case '+':
                    $res = (double) $a + (double) $b;
                    break;
                case '-':
                    $res = (double) $a - (double) $b;
                    break;
                case '*':
                    $res = (double) $a * (double) $b;
                    break;
                case '/':
                    $res = (double) $a / (double) $b;
                    break;
            }

            print_r('result：'.$res.PHP_EOL);
        } catch (Exception $e) {
            print_r('程序计算有误:'.$e->getMessage().PHP_EOL);
        }
    }
}


$program = new Program();

$program->main();
