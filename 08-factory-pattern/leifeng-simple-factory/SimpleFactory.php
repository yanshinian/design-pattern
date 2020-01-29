<?php
include_once 'Undergraduate.php';
include_once 'Volunteer.php';

class SimpleFactory
{
    public static function createLeiFeng(string $type)
    {
        $result = null;
        switch ($type) {
            case '学雷锋的大学生':
                $result = new Undergraduate();
                break;
            case '社区志愿者':
                $result = new Volunteer();
                break;
        }

        return $result;
    }
}
