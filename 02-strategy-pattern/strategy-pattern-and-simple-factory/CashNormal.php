<?php


class CashNormal extends CashSuper
{
    public function acceptCash(float $money): float
    {
        return $money;
    }
}
