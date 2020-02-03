<?php

include_once 'Context.php';

abstract class AbstractExpression
{
    abstract public function interpret(Context $context) :void ;
}
