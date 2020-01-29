<?php
include_once 'CashSuper.php';
include_once 'CashNormal.php';
include_once 'CashRebate.php';
include_once 'CashReturn.php';
include_once 'CashContext.php';

class Program
{
    private float $total = 0.0;
    private int $selectIndex = 0;
    private int $number = 0;
    private float $price = 0.0;
    private array $range = [];
    public function __construct()
    {
        $this->formLoad();
    }
    public function formLoad()
    {
        $this->selectIndex = 0;
        $this->range = ['正常收费', '满300返100', '打8折'];
    }
    public static function main()
    {
        $program = new Program();

        while (true) {
            fwrite(STDOUT, '请输入单价：');

            $program->price = (float)rtrim(fgets(STDIN));

            fwrite(STDOUT, '请输入数量：');

            $program->number = (int)rtrim(fgets(STDIN));

            fwrite(STDOUT, '请选择计算方式：');

            $program->selectIndex = (int)rtrim(fgets(STDIN));


            $program->btnOk_Click();
        }
    }

    public function btnOk_Click()
    {
        $cc = new CashContext($this->range[$this->selectIndex]);

        $totalPrices = $cc->getResult($this->number * $this->price);

        $this->total = $this->total + $totalPrices;
        echo '单价：'.$this->price.' 数量：'.$this->number.' 合计：'.$totalPrices.PHP_EOL;
        echo '总计：'.$this->total.PHP_EOL;
    }
}

Program::main();
