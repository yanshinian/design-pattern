<?php

include_once 'WebSite.php';
include_once 'ConcreteWebSite.php';

class WebSiteFactory
{
    private array $flyweights = [];

    // 获得网站分类
    public function getWebSiteCategory(string $key) :WebSite
    {
        if (!isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new ConcreteWebSite($key);
        }
        return  $this->flyweights[$key];
    }

    public function getWebSiteCount() :int
    {
        return count($this->flyweights);
    }
}
