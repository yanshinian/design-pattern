<?php

include_once 'PlayContext.php';
include_once 'Note.php';
include_once 'Scale.php';
include_once 'Speed.php';

class Program
{
    public static function main() :void
    {
        $context = new PlayContext();
        // 音乐-上海滩
        print_r('上海滩'.PHP_EOL);

        $context->setText('T 500 O 2 E 0.5 G 0.5 A 3 E 0.5 G 0.5 D 3 E 0.5 G 0.5 A 0.5 O 3 C 1 O 2 A 0.5 G 1 C 0.5 E 0.5 D 3');
        $expression = null;

        try {
            while (strlen($context->getText()) > 0) {
                $str = substr($context->getText(), 0, 1);
                switch ($str) {
                    case 'O':
                        $expression = new Scale();
                        break;
                    case 'T':
                        $expression = new Speed();
                        break;
                    case 'C':
                    case 'D':
                    case 'E':
                    case 'F':
                    case 'G':
                    case 'A':
                    case 'B':
                    case 'P':
                        $expression = new Note();
                        break;
                }

                $expression->interpret($context);
            }
        } catch (Exception $ex) {
            print_r($ex->getMessage().PHP_EOL);
        }
    }
}

Program::main();
