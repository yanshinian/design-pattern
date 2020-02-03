<?php

include_once 'Command.php';

// 服务员
class Waiter
{
    private array $orders;

    // 设置订单
    public function setOrder(Command $command)
    {
        if ((string)$command === 'BakeChickenWingCommand') {
            print_r('服务员：鸡翅没有了，清点别的烧烤。'.PHP_EOL);
        } else {
            $this->orders[] = $command;
            print_r('增加订单：'.$command.' 时间 '. date('Y-m-d H:i:s', time()).PHP_EOL);
        }
    }

    public function cancelOrder(Command $command)
    {
        foreach ($this->orders as $key=>$order) {
            if ($order === $command) {
                unset($this->orders[$key]);
            }
        }
    }
    // 通知执行
    public function notify()
    {
        foreach ($this->orders as $command) {
            $command->excuteCommand();
        }
    }
}
