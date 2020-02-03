<?php
include_once 'Singleton.php';

class Program
{
    public static function main() :void
    {
        $s = Singleton::getInstance();

        var_dump(spl_object_hash($s));

        $s = Singleton::getInstance();

        var_dump(spl_object_hash($s));

        // 深拷贝是可以的，但是 __wakeup弄成私有
        $temp = json_encode($s);
        $s = json_decode($temp);
        var_dump(spl_object_hash($s));
    }
}

Program::main();
