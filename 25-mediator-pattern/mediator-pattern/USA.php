<?php

include_once 'Country.php';

class USA extends Country
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
        print_r('美国获得对方信息：'.$message.PHP_EOL);
    }
}
