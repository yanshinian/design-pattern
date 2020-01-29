<?php


class Program
{
    public float $total = 0.0;
    public static function main()
    {
        $program = new Program();

        while (true) {
            fwrite(STDOUT, '请输入单价：');

            $price = (float)rtrim(fgets(STDIN));

            fwrite(STDOUT, '请输入数量：');

            $number = (int)rtrim(fgets(STDIN));

            $program->btnOk_Click($number, $price);
        }
    }

    private function btnOk_Click(int $number, float $price)
    {
        $totalPrices = $number * $price;
        $this->total = $this->total + $totalPrices;
        echo '单价：'.$price.' 数量：'.$number.' 合计：'.$totalPrices.PHP_EOL;
        echo '总计：'.$this->total.PHP_EOL;
    }
}

Program::main();
