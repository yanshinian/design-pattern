<?php

include_once 'Subject.php';

class ConcreteSubject extends Subject
{
    private string $subjectState;

    //具体被观察者状态

    /**
     * @param string $subjectState
     */
    public function setSubjectState(string $subjectState): void
    {
        $this->subjectState = $subjectState;
    }

    /**
     * @return string
     */
    public function getSubjectState(): string
    {
        return $this->subjectState;
    }
}
