<?php
include_once 'Subject.php';

class RealSubject extends Subject
{
    public function request(): void
    {
        print_r('真实的请求'.PHP_EOL);
    }
}
