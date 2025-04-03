<?php

namespace App\Models;

class Product extends PhysicalItem
{
    private string $name;
    private string $code;
    private float $price;

    /**
     * @param string $name
     * @param string $code
     * @param float $price
     * @param float $width
     * @param float $height
     * @param float $depth
     * @param float $weight
     */
    public function __construct(string $name, string $code, float $price, float $width, float $height, float $depth, float $weight)
    {
        parent::__construct($weight, $width, $height, $depth);
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function dimensionProduct(): float
    {
        return $this->getWidth() * $this->getHeight() * $this->getDepth();
    }
}