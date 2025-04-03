<?php

namespace App\Models;

abstract class PhysicalItem
{
    protected float $weight;
    protected float $width;
    protected float $height;
    protected float $depth;

    public function __construct(float $weight, float $width, float $height, float $depth)
    {
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getDepth(): float
    {
        return $this->depth;
    }
}
