<?php


class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {
    }

    public static function getInstance() :Singleton
    {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    private function __clone()
    {
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
