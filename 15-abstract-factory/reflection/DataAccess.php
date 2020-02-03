<?php
include_once 'IUser.php';
include_once 'SqlServerUser.php';
include_once 'AccessUser.php';
include_once 'SqlServerDepartment.php';
include_once 'AccessDepartment.php';

class DataAccess
{
//    private static string $db = (include 'config.php')['DB'];
//    private string string $db = 'Access';
    public static function createUser() :IUser
    {
        $reflection = new ReflectionClass(self::getDb().'User');
        return $reflection->newInstance();
    }

    public static function createDepartment() :IDepartment
    {
        $reflection = new ReflectionClass(self::getDb().'Department');
        return $reflection->newInstance();
    }

    public static function getDb():string
    {
        return (include 'config.php')['DB'];
    }
}
