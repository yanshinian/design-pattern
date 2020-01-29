<?php


interface ICloneable
{
    public function setPersonalInfo(string $sex, int $age) :void;
    public function setWorkExperience(string $timeArea, string $company) :void;
    public function display() :void;
    public function __clone();
}
