<?php

class VODService
{
    public float $price;

    /**
     * @param float $price
     * @param string $name
     */
    public function __construct(float $price, string $name)
    {
        $this->price = $price;
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): VODService
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): VODService
    {
        $this->name = $name;
        return $this;
    }
    public string $name;
}