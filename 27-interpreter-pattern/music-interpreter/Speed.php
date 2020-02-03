<?php

include_once 'Expression.php';

class Speed extends Expression
{
    public function excute(string $key, float $value): void
    {
        $speed = '';
        if ($value < 500) {
            $speed = '快速';
        } elseif ($value >= 1000) {
            $speed = '慢速';
        } else {
            $speed = '中速';
        }

        print_r($speed.' ');
    }
}
