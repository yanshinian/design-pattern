<?php


class CashReturn extends CashSuper
{
    private float $moneyCondition = 0.0; // 返利条件
    private float $moneyReturn = 0.0;

    public function __construct(float $moneyCondition, float $moneyReturn)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    public function acceptCash(float $money): float
    {
        $result = $money;
        if ($money >= $this->moneyCondition) {
            $result = $money - floor($money / $this->moneyCondition) * $this->moneyReturn;
        }
        return $result;
    }
}
