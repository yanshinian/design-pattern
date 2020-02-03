<?php

include_once 'Barbecuer.php';
// 抽象命令
abstract class Command
{
    protected Barbecuer $receiver;

    public function __construct(Barbecuer $receiver)
    {
        $this->receiver = $receiver;
    }

    abstract public function excuteCommand() :void ;
}
