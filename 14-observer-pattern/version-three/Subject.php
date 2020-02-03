<?php
include_once 'Observer.php';

interface Subject
{
    public function attach(Observer $observer) :void;
    public function detach(Observer $observer) :void ;
    public function notify() :void;
    public function setState(string  $state) :void;
    public function getState() :string;
}
