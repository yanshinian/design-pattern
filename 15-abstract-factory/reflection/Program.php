<?php
include_once 'SqlServerUser.php';
include_once 'AccessUser.php';
include_once 'User.php';
include_once 'DataAccess.php';

class Program
{
    public static function main() :void
    {
        $user = new User();
        $su = DataAccess::createUser();

        $su->insert($user);
        $su->getUser(1);

        $department = new Department();
        $ad = DataAccess::createDepartment();
        $ad->insert($department);
        $ad->getDepartment(1);
    }
}

Program::main();
