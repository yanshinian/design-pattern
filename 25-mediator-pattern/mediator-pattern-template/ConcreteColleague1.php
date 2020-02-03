<?php

include_once 'Colleague.php';

class ConcreteColleague1 extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    public function send(string $message) :void
    {
        $this->mediator->send($message, $this);
    }

    public function notify(string $message) :void
    {
        print_r('同事 1 得到消息'.$message.PHP_EOL);
    }
}
