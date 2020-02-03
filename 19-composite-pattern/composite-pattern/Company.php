<?php


abstract class Company
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function add(Company $c) :void ;// 增加
    abstract public function remove(Company $c) :void ;// 移除
    abstract public function display(int $depth) :void ;// 显示
    abstract public function lineOfDuty() :void ;// 履行职责
}
