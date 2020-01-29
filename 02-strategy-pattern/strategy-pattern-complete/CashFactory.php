<?php
include_once 'CashSuper.php';
include_once 'CashNormal.php';
include_once 'CashRebate.php';
include_once 'CashReturn.php';

class CashFactory
{
    public static function createCashAccept(string $type)
    {
        $cashSuper = null;
        switch ($type) {
            case '正常收费':
                $cashSuper = new CashNormal();
                break;
            case '满300返100':
                $cashSuper = new CashReturn(300, 100);
                break;
            case '打8折':
                $cashSuper = new CashRebate(0.8);
                break;
        }

        return $cashSuper;
    }
}
