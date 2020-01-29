<?php

class Program
{
    public function main()
    {
        fwrite(STDOUT, '请输入数字A:');

        $a = rtrim(fgets(STDIN));

        fwrite(STDOUT, '请选择运算符号(+、-、*、/)：');

        $operator = rtrim(fgets(STDIN));

        fwrite(STDOUT, '请输入数字B:');

        $b = rtrim(fgets(STDIN));


        if ($operator === '+') {
            $res = (double) $a + (double) $b;
        } elseif ($operator === '-') {
            $res = (double)$a - (double)$b;
        } elseif ($operator === '*') {
            $res = (double)$a * (double)$b;
        } elseif ($operator === '/') {
            $res = (double)$a / (double)$b;
        }


        var_dump($a, $operator, $b);
        print_r('result：'.$res.PHP_EOL);
    }
}

$program = new Program();
$program->main();
