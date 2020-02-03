<?php

include_once 'Expression.php';

class Scale extends Expression
{
    public function excute(string $key, float $value): void
    {
        $scale = '';

        switch ((int)$value) {
            case 1:
                $scale = '低音';
                break;
            case 2:
                $scale = '中音';
                break;
            case 3:
                $scale = '高音';
                break;
        }

        print_r($scale.' ');
    }
}
