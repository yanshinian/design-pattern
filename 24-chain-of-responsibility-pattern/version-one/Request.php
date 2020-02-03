<?php

// 申请
class Request
{
    // 申请类别
    private string $requestType;

    /**
     * @param string $requestType
     */
    public function setRequestType(string $requestType): void
    {
        $this->requestType = $requestType;
    }

    /**
     * @return string
     */
    public function getRequestType(): string
    {
        return $this->requestType;
    }

    // 申请内容
    private string $requestContent;

    /**
     * @param string $requestContent
     */
    public function setRequestContent(string $requestContent): void
    {
        $this->requestContent = $requestContent;
    }

    /**
     * @return string
     */
    public function getRequestContent(): string
    {
        return $this->requestContent;
    }

    // 数量
    private int $number;

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }
}
