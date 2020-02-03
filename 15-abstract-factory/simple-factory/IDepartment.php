<?php


interface IDepartment
{
    public function insert(Department $department) :void;
    public function getDepartment(int $id) :?Department;
}
