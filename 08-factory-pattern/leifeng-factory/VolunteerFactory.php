<?php

include_once 'IFactory.php';
include_once 'Volunteer.php';

class VolunteerFactory implements IFactory
{
    public function createLeiFeng(): LeiFeng
    {
        return new Volunteer();
    }
}
