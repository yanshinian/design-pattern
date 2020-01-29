<?php

include_once 'IFactory.php';
include_once 'Undergraduate.php';

class UndergraduateFactory implements IFactory
{
    public function createLeiFeng(): LeiFeng
    {
        return new Undergraduate();
    }
}
