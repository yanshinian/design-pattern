<?php
include_once 'HandsetBrandN.php';
include_once 'HandsetBrandM.php';
include_once 'HandsetAddressList.php';
include_once 'HandsetGame.php';
include_once 'HandsetBrandS.php';
include_once 'HandsetMp3.php';

class Program
{
    public static function main() :void
    {
        $ab = new HandsetBrandN();
        $ab->setHandsetSoft(new HandsetGame());
        $ab->run();

        $ab->setHandsetSoft(new HandsetAddressList());
        $ab->run();

        $ab = new HandsetBrandM();
        $ab->setHandsetSoft(new HandsetGame());
        $ab->run();

        $ab->setHandsetSoft(new HandsetAddressList());
        $ab->run();

        $ab = new HandsetBrandS();
        $ab->setHandsetSoft(new HandsetMp3());
        $ab->run();
    }
}

Program::main();
