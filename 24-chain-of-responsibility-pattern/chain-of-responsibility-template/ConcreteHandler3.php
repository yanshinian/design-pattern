<?php

include_once 'Handler.php';

class ConcreteHandler3 extends Handler
{
    public function handleRequest(int $request): void
    {
        if ($request >= 20 && $request < 30) {
            printf('%s 处理请求 %d'.PHP_EOL, self::class, $request);
        } elseif ($this->successor != null) {
            $this->successor->handleRequest($request);
        }
    }
}
