<?php


class WorkExperience
{
    private string $workDate;
    private string $company;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
