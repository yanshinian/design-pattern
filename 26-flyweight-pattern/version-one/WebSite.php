<?php

// 网站
class WebSite
{
    private string $name = '';
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function use() :void
    {
        print_r('网站分类：'.$this->name.PHP_EOL);
    }
}
