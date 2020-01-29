<?php
include_once 'TestPaper.php';

// 学生甲 抄的试卷
class TestPaperA extends TestPaper
{
    public function answer1() :string
    {
        return 'b';
    }

    public function answer2() :string
    {
        return 'a';
    }

    public function answer3() :string
    {
        return 'c';
    }
}
