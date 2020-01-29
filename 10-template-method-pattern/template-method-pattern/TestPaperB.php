<?php

include_once 'TestPaper.php';

// 学生乙 抄的试卷
class TestPaperB extends TestPaper
{
    public function answer1() :string
    {
        return 'd';
    }

    public function answer2() :string
    {
        return 'b';
    }

    public function answer3() :string
    {
        return 'a';
    }
}
