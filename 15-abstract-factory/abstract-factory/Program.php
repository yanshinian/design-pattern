<?php
include_once 'SqlServerUser.php';
include_once 'AccessUser.php';
include_once 'User.php';
include_once 'SqlServerFactory.php';
include_once 'AccessFactory.php';

class Program
{
    public static function main() :void
    {
        $user = new User();
        $factory = new SqlServerFactory();
        $su = $factory->createUser();

        $su->insert($user);
        $su->getUser(1);

        $department = new Department();
        $factory = new AccessFactory();
        $ad = $factory->createDepartment();
        $ad->insert($department);
        $ad->getDepartment(1);
    }
}

Program::main();
