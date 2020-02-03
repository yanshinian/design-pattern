<?php

// 演奏内容
class PlayContext
{
    // 演奏文本
    private string $text;

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
