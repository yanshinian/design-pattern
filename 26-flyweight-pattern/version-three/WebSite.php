<?php

include_once 'User.php';

// 网站
abstract class WebSite
{
    abstract public function use(User $user) :void;
}
