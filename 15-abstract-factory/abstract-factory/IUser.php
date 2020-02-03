<?php
include_once 'User.php';

interface IUser
{
    public function insert(User $user) :void;
    public function getUser(int $id) :?User;
}
