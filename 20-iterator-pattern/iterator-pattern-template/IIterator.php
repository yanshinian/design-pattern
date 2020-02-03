<?php


abstract class IIterator
{
    abstract public function first()  ;
    abstract public function next() ;
    abstract public function isDone() :bool ;
    abstract public function currentItem() ;
}
