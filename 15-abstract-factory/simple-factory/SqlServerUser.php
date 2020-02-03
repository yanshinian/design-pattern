<?php
include_once 'User.php';
include_once 'IUser.php';

class SqlServerUser implements IUser
{
    public function insert(User $user) :void
    {
        print_r('在 SQL Server 中给 User 表增加一条记录'.PHP_EOL);
    }

    public function getUser(int $id) :?User
    {
        print_r('在SQL Server 中根据 ID 得到 User 表一条记录'.PHP_EOL);
        return null;
    }
}
