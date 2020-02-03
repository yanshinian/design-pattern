<?php

include_once 'Request.php';

class Manager
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // 得到结果
    public function getResult(string $managerLevel, Request $request)
    {
        if ($managerLevel === '经理') {
            if ($request->getRequestType() === '请假' && $request->getNumber() <= 2) {
                printf('%s : %s 数量 %d 被批准'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
            } else {
                printf('%s : %s 数量 %d 我无权处理'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
            }
        } elseif ($managerLevel === '总监') {
            if ($request->getRequestType() === '请假' && $request->getNumber() <= 2) {
                printf('%s : %s 数量 %d 被批准'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
            } else {
                printf('%s : %s 数量 %d 我无权处理'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
            }
        } elseif ($managerLevel === '总经理') {
            if ($request->getRequestType() === '请假') {
                printf('%s : %s 数量 %d 被批准'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
            } elseif ($request->getRequestType() === '加薪' && $request->getNumber() <= 500) {
                printf('%s : %s 数量 %d 被批准'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
            } elseif ($request->getRequestType() === '加薪' && $request->getNumber() > 500) {
                printf('%s : %s 数量 %d 再说吧'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
            }
        }
    }
}
