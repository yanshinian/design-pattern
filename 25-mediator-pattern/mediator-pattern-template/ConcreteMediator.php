<?php

include_once 'Mediator.php';
include_once 'ConcreteColleague1.php';
include_once 'ConcreteColleague2.php';

class ConcreteMediator extends Mediator
{
    private ConcreteColleague1 $colleague1;
    private ConcreteColleague2 $colleague2;

    /**
     * @param ConcreteColleague1 $colleague1
     */
    public function setColleague1(ConcreteColleague1 $colleague1): void
    {
        $this->colleague1 = $colleague1;
    }

    /**
     * @param ConcreteColleague2 $colleague2
     */
    public function setColleague2(ConcreteColleague2 $colleague2): void
    {
        $this->colleague2 = $colleague2;
    }

    public function send(string $message, Colleague $colleague): void
    {
        if ($colleague === $this->colleague1) {
            $this->colleague2->notify($message);
        } else {
            $this->colleague1->notify($message);
        }
    }
}
