<?php
include_once 'IFactory.php';
include_once 'IUser.php';
include_once 'SqlServerUser.php';

class SqlServerFactory implements IFactory
{
    public function createUser(): IUser
    {
        return new SqlServerUser();
    }
}
