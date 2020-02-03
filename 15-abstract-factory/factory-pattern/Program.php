<?php
include_once 'SqlServerUser.php';
include_once 'AccessUser.php';
include_once 'User.php';
include_once 'SqlServerFactory.php';

class Program
{
    public static function main() :void
    {
        $user = new User();
        $factory = new SqlServerFactory();
        $su = $factory->createUser();

        $su->insert($user);
        $su->getUser(1);
    }
}

Program::main();
