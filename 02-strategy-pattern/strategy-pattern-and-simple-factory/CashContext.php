<?php

include_once 'CashSuper.php';
class CashContext
{
    private CashSuper $cs;

    public function __construct(string $type)
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
        $this->cs = $cashSuper;
    }

    public function getResult(float $money) :float
    {
        return $this->cs->acceptCash($money);
    }
}
