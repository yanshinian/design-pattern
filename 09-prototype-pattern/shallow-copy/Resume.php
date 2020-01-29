<?php
include_once 'ICloneable.php';
include_once 'WorkExperience.php';
// 简历
class Resume implements ICloneable
{
    private string $name;
    private string $sex;
    private int $age;

    private WorkExperience $work;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->work = new WorkExperience();
    }

    // 设置个人信息
    public function setPersonalInfo(string $sex, int $age) :void
    {
        $this->sex = $sex;
        $this->age = $age;
    }

    // 设置工作经历
    public function setWorkExperience(string $workDate, string $company) :void
    {
        $this->work->workDate = $workDate;
        $this->work->company = $company;
    }

    // 显示
    public function display() :void
    {
        print_r($this->name.' '.$this->sex.' '.$this->age.PHP_EOL);
        print_r('工作经历：'.$this->work->workDate.' '. $this->work->company.PHP_EOL);
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
