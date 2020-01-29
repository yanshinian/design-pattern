<?php


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
        $this->range = ['正常收费', '打八折', '打七折', '打五折'];
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

    private function btnOk_Click()
    {
        switch ($this->selectIndex) {
            case 0:
                $totalPrices = $this->number * $this->price;
                break;
            case 1:
                $totalPrices = $this->number * $this->price * 0.8;
                break;
            case 2:
                $totalPrices = $this->number * $this->price * 0.7;
                break;
            case 3:
                $totalPrices = $this->number * $this->price * 0.5;
                break;
        }
        $this->total = $this->total + $totalPrices;
        echo '单价：'.$this->price.' 数量：'.$this->number.' 合计：'.$totalPrices.PHP_EOL;
        echo '总计：'.$this->total.PHP_EOL;
    }
}

Program::main();
