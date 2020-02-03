<?php
include_once 'Handler.php';

class ConcreteHandler1 extends Handler
{
    public function handleRequest(int $request): void
    {
        if ($request >= 0 && $request < 10) {
            printf('%s 处理请求 %d'.PHP_EOL, self::class, $request);
        } elseif ($this->successor != null) {
            $this->successor->handleRequest($request);
        }
    }
}
