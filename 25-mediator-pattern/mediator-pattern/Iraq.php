<?php

include_once 'Country.php';

// 伊拉克
class Iraq extends Country
{
    public function __construct(UnitedNations $mediator)
    {
        parent::__construct($mediator);
    }

    // 声明
    public function declare(string $message) :void
    {
        $this->mediator->declare($message, $this);
    }

    // 获得消息
    public function getMessage(string $message) :void
    {
        print_r('伊拉克获得对方信息：'.$message.PHP_EOL);
    }
}
