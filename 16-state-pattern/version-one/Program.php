<?php


class Program
{
    public static int $hour = 0;// 钟点
    public static bool $workFinished = false; // 任务完成标记

    // 写程序方法
    public static function writeProgram() :void
    {
        if (self::$hour < 12) {
            printf("当前时间：%d 点 上午工作，精神百倍" . PHP_EOL, self::$hour);
        } elseif (self::$hour < 13) {
            printf("当前时间：%d 点 饿了，午饭：犯困、午休。" . PHP_EOL, self::$hour);
        } elseif (self::$hour < 17) {
            printf("当前时间：%d 点 下午状态不错，继续努力" . PHP_EOL, self::$hour);
        } else {
            if (self::$workFinished) {
                printf("当前时间：%d 点 下班回家了" . PHP_EOL, self::$hour);
            } else {
                if (self::$hour < 21) {
                    printf("当前时间：%d 点 加班哦，疲累之极" . PHP_EOL, self::$hour);
                } else {
                    printf("当前时间：%d 点 不行了， 睡着了。" . PHP_EOL, self::$hour);
                }
            }
        }
    }
    public static function main() :void
    {
        self::$hour = 9;
        self::writeProgram();

        self::$hour = 10;
        self::writeProgram();

        self::$hour = 12;
        self::writeProgram();

        self::$hour = 13;
        self::writeProgram();

        self::$hour = 14;
        self::writeProgram();

        self::$hour = 17;
        self::$workFinished = true;
        self::writeProgram();

        self::$hour = 19;
        self::writeProgram();

        self::$hour = 22;
        self::writeProgram();
    }
}

Program::main();
