<?php

include_once 'StockObserver.php';

class Secretary
{
    // 同事列表
    private array $observers = [];
    private string $action;

    // 增加
    public function attach(StockObserver $observer) :void
    {
        $this->observers[] = $observer;
    }

    // 通知
    public function notify() :void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    // 前台状态
    public function setAction(string $value) :void
    {
        $this->action = $value;
    }

    public function getAction() :string
    {
        return $this->action;
    }
}
