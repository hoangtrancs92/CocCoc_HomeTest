<?php

namespace App\Helpers;

use App\Config\Common;
use App\Interfaces\FeeCalculatorInterface;
use App\Models\Product;

class CalculatorFeeHelper implements FeeCalculatorInterface
{
    protected Common $common;

    /**
     * Constructor.
     *
     * @param Common $common The common configuration instance.
     */
    public function __construct(Common $common)
    {
        $this->common = $common;
    }

    /**
     * Calculate the fee based on product weight.
     *
     * @param Product $product The product object.
     * @return float
     */
    public function weightFee(Product $product): float
    {
        return $product->getWeight() * $this->common->getCoefficient('weightCoefficient');
    }

    /**
     * Calculate the fee based on product dimensions.
     *
     * @param Product $product The product object.
     * @return float
     */
    public function dimensionFee(Product $product): float
    {
        return $product->dimensionProduct() * $this->common->getCoefficient('dimensionCoefficient');
    }

    /**
     * Calculate the fee based on product type.
     *
     * @param Product $product The product object.
     * @return float
     */
    public function productTypeFee(Product $product): float
    {
        return 0;
    }
}