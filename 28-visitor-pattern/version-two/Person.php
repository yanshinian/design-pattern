<?php

include_once 'Person.php';

abstract class Person
{
    // 接受
    abstract public function accept(Action $visitor) :void ;
}
