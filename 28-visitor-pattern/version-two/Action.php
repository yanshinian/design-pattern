<?php

include_once 'Man.php';
include_once 'Woman.php';

abstract class Action
{
    // 得到男人结论 或 反应
    abstract public function getManConclusion(Man $concreteElementA);
    // 得到女人结论 或 反应
    abstract public function getWomanConclusion(Woman $concreteElementB);
}
