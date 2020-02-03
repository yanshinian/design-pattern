<?php
include_once 'HandsetBrandMAddressList.php';
include_once 'HandsetBrandNAddressList.php';
include_once 'HandsetBrandMGame.php';
include_once 'HandsetBrandNGame.php';

class Program
{
    public static function main() :void
    {
        $ab = new HandsetBrandMAddressList();
        $ab->run();

        $ab = new HandsetBrandMGame();
        $ab->run();

        $ab = new HandsetBrandNAddressList();
        $ab->run();

        $ab = new HandsetBrandNGame();
        $ab->run();
    }
}

Program::main();
