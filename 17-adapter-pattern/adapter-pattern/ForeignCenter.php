<?php


class ForeignCenter
{
    private string $name;

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function attack() :void
    {
        printf('外籍中锋 %s 进攻'.PHP_EOL, $this->name);
    }

    public function defense() :void
    {
        printf('外籍中锋 %s 防守'.PHP_EOL, $this->name);
    }
}
