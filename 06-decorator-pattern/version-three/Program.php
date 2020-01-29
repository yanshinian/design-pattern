<?php
include_once 'Person.php';
include_once 'Tie.php';
include_once 'LeatherShoes.php';
include_once 'Suit.php';
include_once 'Sneakers.php';
include_once 'Tshirts.php';
include_once 'BigTrouser.php';

class Program
{
    public static function main()
    {
        $xc = new Person('小菜');
        print_r('第一种装扮：'.PHP_EOL);

        $pgx = new Sneakers();
        $kk = new BigTrouser();
        $dtx = new Tshirts();

        $pgx->decorate($xc);
        $kk->decorate($pgx);
        $dtx->decorate($kk);
        $dtx->show();

        print_r('第二种装扮：'.PHP_EOL);

        $px = new LeatherShoes();
        $ld = new Tie();
        $xz = new Suit();

        $px->decorate($xc);
        $ld->decorate($px);
        $xz->decorate($ld);
        $xz->show();

        print_r('第三种装扮：'.PHP_EOL);
        $pqx2 = new Sneakers();
        $px2 = new LeatherShoes();
        $kk2 = new BigTrouser();
        $ld2 = new Tie();
        $pqx2->decorate($xc);
        $px2->decorate($pqx2);
        $kk2->decorate($px2);
        $ld2->decorate($kk2);
        $ld2->show();
    }
}

Program::main();
