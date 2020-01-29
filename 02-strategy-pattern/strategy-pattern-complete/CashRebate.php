<?php


class CashRebate extends CashSuper
{
    private float $moneyRebate = 1.0;
    public function __construct(float $moneyRebate)
    {
        $this->moneyRebate = $moneyRebate;
    }

    public function acceptCash(float $money): float
    {
        return $money * $this->moneyRebate;
    }
}
