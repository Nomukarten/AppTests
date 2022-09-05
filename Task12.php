<?php

namespace src;

class Task12
{
    protected $var1 = 0;
    protected $var2 = 0;
    protected $store = 0;

    public function __construct(float $value1, float $value2)
    {
        $this->var1 = $value1;
        $this->var2 = $value2;
    }

    public function add(): object
    {
        $this->store = $this->var1 + $this->var2;

        return $this;
    }

    public function subtract(): object
    {
        $this->store = $this->var1 - $this->var2;

        return $this;
    }

    public function multiply(): object
    {
        $this->store = $this->var1 * $this->var2;

        return $this;
    }

    public function divide(): object
    {
        $this->store = $this->var1 / $this->var2;

        return $this;
    }

    public function subtractBy(float $value): object
    {
        $this->store -= $value;

        return $this;
    }

    public function addBy(float $value): object
    {
        $this->store += $value;

        return $this;
    }

    public function multiplyBy(float $value): object
    {
        $this->store *= $value;

        return $this;
    }

    public function divideBy(float $value): object
    {
        $this->store /= $value;

        return $this;
    }

    public function __toString()
    {
        return $this->store;
    }

    public function main(string $inputString): string
    {
        return $inputString;
    }
}
