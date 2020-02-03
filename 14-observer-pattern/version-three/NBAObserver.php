<?php
include_once 'Observer.php';

class NBAObserver extends Observer
{
    public function __construct(string $name, Subject $sub)
    {
        parent::__construct($name, $sub);
    }

    public function update() :void
    {
        print_r(sprintf("%s %s 关闭 NBA 直播, 继续工作! ".PHP_EOL, $this->sub->getState(), $this->name));
    }
}
