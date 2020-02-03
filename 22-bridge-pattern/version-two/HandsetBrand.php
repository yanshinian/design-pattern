<?php
include_once 'HandsetSoft.php';

abstract class HandsetBrand
{
    protected HandsetSoft $soft;

    // 设置手机软件
    public function setHandsetSoft(HandsetSoft $soft) :void
    {
        $this->soft = $soft;
    }

    // 运行
    abstract public function run() :void ;
}
