<?php

include_once 'LeiFeng.php';

interface IFactory
{
    public function createLeiFeng() :LeiFeng;
}
