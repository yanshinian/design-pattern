<?php
include_once 'IDepartment.php';
include_once 'Department.php';

class SqlServerDepartment implements IDepartment
{
    public function insert(Department $department) :void
    {
        print_r('在 SQL Server 中给 Department 表增加一条记录'.PHP_EOL);
    }

    public function getDepartment(int $id) :?Department
    {
        print_r('在SQL Server 中根据 ID 得到 Department 表一条记录'.PHP_EOL);
        return null;
    }
}
