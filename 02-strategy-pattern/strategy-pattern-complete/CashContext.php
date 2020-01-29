<?php

include_once 'CashSuper.php';
class CashContext
{
    private CashSuper $cs;

    public function __construct(CashSuper $cashSuper)
    {
        $this->cs = $cashSuper;
    }

    public function getResult(float $money) :float
    {
        return $this->cs->acceptCash($money);
    }
}
