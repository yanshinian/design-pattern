<?php
include_once 'Operation.php';

interface IFactory
{
    public function createOperation() :Operation;
}
