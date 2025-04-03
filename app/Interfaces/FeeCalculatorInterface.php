<?php

namespace App\Interfaces;

use App\Models\Product;

interface FeeCalculatorInterface
{
    public function weightFee(Product $product): float;

    public function dimensionFee(Product $product): float;

    public function productTypeFee(Product $product): float;
}