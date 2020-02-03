<?php

include_once 'Manager.php';

class GeneralManger extends Manager
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function requestApplications(Request $request): void
    {
        if ($request->getRequestType() === '请假') {
            printf('%s : %s 数量 %d 被批准'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
        } elseif ($request->getRequestType() === '加薪' && $request->getNumber() <= 500) {
            printf('%s : %s 数量 %d 被批准'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
        } elseif ($request->getRequestType() === '加薪' && $request->getNumber() > 500) {
            printf('%s : %s 数量 %d 再说吧'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
        }
    }
}
