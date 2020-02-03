<?php

include_once 'Observer.php';
include_once 'Subject.php';

class Secretary implements Subject
{
    // 同事列表
    private array $observers = [];
    private string $action;

    // 增加
    public function attach(Observer $observer) :void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) :void
    {
        foreach ($this->observers as $key=>$ob) {
            if ($observer === $ob) {
                unset($this->observers[$key]);
            }
        }
    }
    // 通知
    public function notify() :void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    // 前台状态
    public function setState(string $value) :void
    {
        $this->action = $value;
    }

    public function getState() :string
    {
        return $this->action;
    }
}
