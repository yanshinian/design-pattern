<?php
include_once 'Proxy.php';

class Program
{
    public static function main()
    {
        $proxy = new Proxy();
        $proxy->request();
    }
}

Program::main();
