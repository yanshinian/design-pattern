<?php

include_once 'Request.php';

abstract class Manager
{
    protected string $name;

    //管理者的上级
    protected Manager $superior;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // 设置管理者的上级

    /**
     * @param Manager $superior
     */
    public function setSuperior(Manager $superior): void
    {
        $this->superior = $superior;
    }

    // 申请请求

    abstract public function requestApplications(Request $request) :void;
}
