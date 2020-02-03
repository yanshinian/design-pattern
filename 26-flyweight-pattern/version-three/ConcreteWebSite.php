<?php

include_once 'WebSite.php';
include_once 'User.php';

class ConcreteWebSite extends WebSite
{
    private string $name = '';

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function use(User $user): void
    {
        print_r('网站分类：'. $this->name.' 用户：'.$user->getName().PHP_EOL);
    }
}
