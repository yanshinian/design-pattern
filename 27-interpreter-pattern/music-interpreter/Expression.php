<?php

include_once 'PlayContext.php';

abstract class Expression
{
    // 解释器
    public function interpret(PlayContext $context) :void
    {
        if (strlen($context->getText()) === 0) {
            return ;
        }
        $playKey = substr($context->getText(), 0, 1);
        $context->setText(substr($context->getText(), 2));

        $playValue = (float)substr(rtrim($context->getText()), 0, strpos(rtrim($context->getText()), ' ')+1);
        $context->setText(substr(rtrim($context->getText()), strpos(rtrim($context->getText()), ' ')+1));

        $this->excute($playKey, $playValue);
    }

    // 执行
    abstract public function excute(string $key, float $value) :void ;
}
