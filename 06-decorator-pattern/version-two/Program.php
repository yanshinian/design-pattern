<?php
include_once 'Tie.php';
include_once 'TShirts.php';
include_once 'LeatherShoes.php';
include_once 'Suit.php';
include_once 'Tie.php';
include_once 'Sneakers.php';
include_once 'BigTrouser.php';

class Program
{
    public static function main()
    {
        $xc = new Person('小菜');
        print_r('第一种装扮:'.PHP_EOL);

        $dtx = new TShirts();
        $kk = new BigTrouser();
        $pqx = new Sneakers();

        $dtx->show();
        $kk->show();
        $pqx->show();
        $xc->show();

        print_r('第二种装扮：'.PHP_EOL);

        $xz = new Suit();
        $ld = new Tie();
        $px = new LeatherShoes();

        $xz->show();
        $ld->show();
        $px->show();
    }
}
