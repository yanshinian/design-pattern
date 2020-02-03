<?php
include_once 'SqlserverUser.php';
include_once 'User.php';

class Program
{
    public static function main() :void
    {
        $user = new User();
        $su = new SqlServerUser();

        $su->insert($user);
        $su->getUser(1);
    }
}

Program::main();
