<?php

include_once 'AbstractExpression.php';

class NonterminalExpression extends AbstractExpression
{
    public function interpret(Context $context): void
    {
        print_r('非终端解释器'.PHP_EOL);
    }
}
