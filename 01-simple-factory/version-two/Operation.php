<?php


class Operation
{
    public static function getResult(float $numberA, float $numberB, string $operator) :float
    {
        switch ($operator) {
            case '+':
                $res =  $numberA +  $numberB;
                break;
            case '-':
                $res =  $numberA -  $numberB;
                break;
            case '*':
                $res =  $numberA *  $numberB;
                break;
            case '/':
                $res =  $numberA /  $numberB;
                break;
        }
        return $res;
    }
}
