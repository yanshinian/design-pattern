<?php


class Work
{
    private int $hour;
    private bool $finish = false;

    /**
     * @param bool $finish
     */
    public function setFinish(bool $finish): void
    {
        $this->finish = $finish;
    }

    /**
     * @return bool
     */
    public function getFinish(): bool
    {
        return $this->finish;
    }

    /**
     * @param int $hour
     */
    public function setHour(int $hour): void
    {
        $this->hour = $hour;
    }
    /**
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }

    // 写程序方法
    public function writeProgram() :void
    {
        if ($this->hour < 12) {
            printf("当前时间：%d 点 上午工作，精神百倍" . PHP_EOL, $this->hour);
        } elseif ($this->hour < 13) {
            printf("当前时间：%d 点 饿了，午饭：犯困、午休。" . PHP_EOL, $this->hour);
        } elseif ($this->hour < 17) {
            printf("当前时间：%d 点 下午状态不错，继续努力" . PHP_EOL, $this->hour);
        } else {
            if ($this->finish) {
                printf("当前时间：%d 点 下班回家了" . PHP_EOL, $this->hour);
            } else {
                if ($this->hour < 21) {
                    printf("当前时间：%d 点 加班哦，疲累之极" . PHP_EOL, $this->hour);
                } else {
                    printf("当前时间：%d 点 不行了， 睡着了。" . PHP_EOL, $this->hour);
                }
            }
        }
    }
}
