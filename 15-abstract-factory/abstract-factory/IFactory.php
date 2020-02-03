<?php
include_once 'IUser.php';

interface IFactory
{
    public function createUser() :IUser;
    public function createDepartment() :IDepartment;
}
