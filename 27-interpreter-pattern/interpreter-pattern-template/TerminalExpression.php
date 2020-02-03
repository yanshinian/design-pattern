<?php

include_once 'AbstractExpression.php';

class TerminalExpression extends AbstractExpression
{
    public function interpret(Context $context): void
    {
        print_r('终端解释器'.PHP_EOL);
    }
}
