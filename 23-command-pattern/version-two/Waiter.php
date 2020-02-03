<?php

include_once 'Command.php';

// 服务员
class Waiter
{
    private Command $command;

    // 设置订单
    public function setOrder(Command $command)
    {
        $this->command = $command;
    }

    // 通知执行
    public function notify()
    {
        $this->command->excuteCommand();
    }
}
