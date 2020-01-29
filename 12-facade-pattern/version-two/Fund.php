<?php
include_once 'Stock1.php';
include_once 'Stock2.php';
include_once 'Stock3.php';
include_once 'NationalDebt1.php';
include_once 'Realty1.php';

class Fund
{
    public Stock1 $gu1;
    public Stock2 $gu2;
    public Stock3 $gu3;
    public NationalDebt1 $nd1;
    public Realty1 $rt1;

    public function __construct()
    {
        $this->gu1 = new Stock1();
        $this->gu2 = new Stock2();
        $this->gu3 = new Stock3();

        $this->nd1 = new NationalDebt1();
        $this->rt1 = new Realty1();
    }

    public function buyFund() :void
    {
        $this->gu1->buy();
        $this->gu2->buy();
        $this->gu3->buy();

        $this->nd1->buy();
        $this->rt1->buy();
    }

    public function sellFund() :void
    {
        $this->gu1->sell();
        $this->gu2->sell();
        $this->gu3->sell();

        $this->nd1->sell();
        $this->rt1->sell();
    }
}
