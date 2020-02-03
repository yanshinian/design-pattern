<?php

include_once 'Observer.php';
include_once 'ConcreteSubject.php';

class ConcreteObserver extends Observer
{
    private string $name;
    private string $observerstate;
    private ConcreteSubject $subject;

    public function __construct(ConcreteSubject $subject, string $name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    public function update(): void
    {
        print_r(sprintf("观察者 %s  的新状态是 %s".PHP_EOL, $this->name, $this->subject->getSubjectState()));
    }

    /**
     * @param ConcreteSubject $subject
     */
    public function setSubject(ConcreteSubject $subject): void
    {
        $this->subject = $subject;
    }
    /**
     * @return ConcreteSubject
     */
    public function getSubject(): ConcreteSubject
    {
        return $this->subject;
    }
}
