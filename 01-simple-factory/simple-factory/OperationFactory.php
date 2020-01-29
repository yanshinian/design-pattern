<?php

include 'Operation.php';
include 'OperationAdd.php';
include 'OperationDiv.php';
include 'OperationMul.php';
include 'OperationSub.php';

class OperationFactory
{
    public static function createOperate(string $operate) :?Operation
    {
        $oper = null;

        switch ($operate) {
            case '+':
                $oper = new OperationAdd();
                break;
            case '-':
                $oper = new OperationSub();
                break;
            case '*':
                $oper = new OperationMul();
                break;
            case '/':
                $oper = new OperationDiv();
                break;
        }

        return $oper;
    }
}
