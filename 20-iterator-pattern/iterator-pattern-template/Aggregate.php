<?php

include_once 'IIterator.php';

abstract class Aggregate
{
    abstract public function createIterator() :IIterator;
}
