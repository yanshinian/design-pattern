<?php
include_once 'IUser.php';
include_once 'SqlServerUser.php';
include_once 'AccessUser.php';
include_once 'SqlServerDepartment.php';
include_once 'AccessDepartment.php';

class DataAccess
{
    private static string $db = 'SqlServer';
//    private string string $db = 'Access';
    public static function createUser() :IUser
    {
        $result = null;
        switch (self::$db) {
            case 'SqlServer':
                $result = new SqlServerUser();
                break;
            case 'Access':
                $result = new AccessUser();
                break;
        }
        return $result;
    }

    public static function createDepartment() :IDepartment
    {
        $result = null;
        switch (self::$db) {
            case 'SqlServer':
                $result = new SqlServerDepartment();
                break;
            case 'Access':
                $result = new AccessDepartment();
                break;
        }
        return $result;
    }
}
