<?php
include_once 'ICloneable.php';
// 简历
class Resume implements ICloneable
{
    private string $name;
    private string $sex;
    private int $age;
    private string $timeArea;
    private string $company;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // 设置个人信息
    public function setPersonalInfo(string $sex, int $age) :void
    {
        $this->sex = $sex;
        $this->age = $age;
    }

    // 设置工作经历
    public function setWorkExperience(string $timeArea, string $company) :void
    {
        $this->timeArea = $timeArea;
        $this->company = $company;
    }

    // 显示
    public function display() :void
    {
        print_r($this->name.' '.$this->sex.' '.$this->age.PHP_EOL);
        print_r('工作经历：'.$this->timeArea.' '. $this->company.PHP_EOL);
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
