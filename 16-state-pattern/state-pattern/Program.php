<?php
include_once 'Work.php';

class Program
{
    public static function main() :void
    {
        // 紧急项目
        $emergencyProject = new Work();
        $emergencyProject->setHour(9);
        $emergencyProject->writeProgram();

        $emergencyProject->setHour(10);
        $emergencyProject->writeProgram();

        $emergencyProject->setHour(12);
        $emergencyProject->writeProgram();

        $emergencyProject->setHour(13);
        $emergencyProject->writeProgram();

        $emergencyProject->setHour(14);
        $emergencyProject->writeProgram();

        $emergencyProject->setHour(17);
        $emergencyProject->writeProgram();

        $emergencyProject->setFinish(true);
        $emergencyProject->setHour(19);
        $emergencyProject->writeProgram();

        $emergencyProject->setHour(22);
        $emergencyProject->writeProgram();
    }
}
Program::main();
