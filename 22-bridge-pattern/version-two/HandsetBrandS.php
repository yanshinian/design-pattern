<?php

include_once 'HandsetBrand.php';

// 手机品牌 S
class HandsetBrandS extends HandsetBrand
{
    public function run(): void
    {
        $this->soft->run();
    }
}
