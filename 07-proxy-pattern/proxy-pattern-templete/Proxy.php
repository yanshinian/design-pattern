<?php
include_once 'Subject.php';
include_once 'RealSubject.php';
class Proxy extends Subject
{
    public ?RealSubject $realSubject = null;
    public function request(): void
    {
        if ($this->realSubject === null) {
            $this->realSubject = new RealSubject();
        }
        $this->realSubject->request();
    }
}
