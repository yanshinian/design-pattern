<?php

include_once 'Manager.php';

class Majordomo extends Manager
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function requestApplications(Request $request): void
    {
        if ($request->getRequestType() === '请假' && $request->getNumber() <= 2) {
            printf('%s : %s 数量 %d 被批准'.PHP_EOL, $this->name, $request->getRequestContent(), $request->getNumber());
        } else {
            if ($this->superior !== null) {
                $this->superior->requestApplications($request);
            }
        }
    }
}
