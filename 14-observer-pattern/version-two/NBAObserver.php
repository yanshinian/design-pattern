<?php
include_once 'Observer.php';

class NBAObserver extends Observer
{
    public function __construct(string $name, Secretary $sub)
    {
        parent::__construct($name, $sub);
    }

    public function update() :void
    {
        print_r(sprintf("%s %s 关闭 NBA 直播, 继续工作! ".PHP_EOL, $this->sub->getAction(), $this->name));
    }
}
