<?php

include_once 'Context.php';
include_once 'AbstractExpression.php';
include_once 'TerminalExpression.php';
include_once 'NonterminalExpression.php';

class Program
{
    public static function main() :void
    {
        $context = new Context();
        $list = [];
        $list[] = new TerminalExpression();
        $list[] = new NonterminalExpression();
        $list[] = new TerminalExpression();
        $list[] = new TerminalExpression();

        foreach ($list as $e) {
            $e->interpret($context);
        }
    }
}

Program::main();
