<?php
include_once 'Fund.php';

class Program
{
    public static function main() :void
    {
        $jijin = new Fund();

        // 基金购买
        $jijin->buyFund();

        // 基金赎回
        $jijin->sellFund();
    }
}

Program::main();
