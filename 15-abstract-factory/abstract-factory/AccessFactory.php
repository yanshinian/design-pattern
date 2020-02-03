<?php
include_once 'IFactory.php';
include_once 'AccessUser.php';
include_once 'AccessDepartment.php';

class AccessFactory implements IFactory
{
    public function createUser(): IUser
    {
        return new AccessUser();
    }

    public function createDepartment(): IDepartment
    {
        return new AccessDepartment();
    }
}
