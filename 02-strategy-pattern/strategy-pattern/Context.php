<?php

include_once 'Strategy.php';

class Context
{
    public Strategy $strategy;
    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    // 上下文接口
    public function contextInterface()
    {
        $this->strategy->algorithmInterface();
    }
}
