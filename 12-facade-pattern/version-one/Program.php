<?php
include_once 'Stock1.php';
include_once 'Stock2.php';
include_once 'Stock3.php';
include_once 'NationalDebt1.php';
include_once 'Realty1.php';

class Program
{
    public static function main() :void
    {
        $gu1 = new Stock1();
        $gu2 = new Stock2();
        $gu3 = new Stock3();

        $nd1 = new NationalDebt1();
        $rt1 = new Realty1();

        $gu1->buy();
        $gu2->buy();
        $gu3->buy();

        $nd1->buy();
        $rt1->buy();

        $gu1->sell();
        $gu2->sell();
        $gu3->sell();
        $nd1->sell();
        $rt1->sell();
    }
}

Program::main();
