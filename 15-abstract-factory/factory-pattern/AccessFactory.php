<?php
include_once 'IFactory.php';
include_once 'AccessUser.php';

class AccessFactory implements IFactory
{
    public function createUser(): IUser
    {
        return new AccessUser();
    }
}
