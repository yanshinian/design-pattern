<?php
include_once 'Handler.php';

class ConcreteHandler2 extends Handler
{
    public function handleRequest(int $request): void
    {
        if ($request >= 10 && $request < 20) {
            printf('%s 处理请求 %d'.PHP_EOL, self::class, $request);
        } elseif ($this->successor != null) {
            $this->successor->handleRequest($request);
        }
    }
}
