<?php

namespace App\Services;

use App\Helpers\CalculatorFeeHelper;
use App\Models\Product;

class ShipmentFeeService
{
    private Product $product;
    private CalculatorFeeHelper $calculatorFeeHelper;

    public function __construct(Product $product, CalculatorFeeHelper $calculatorFeeHelper)
    {
        $this->product = $product;
        $this->calculatorFeeHelper = $calculatorFeeHelper;
    }

    /**
     * Calculate the shipment fee based on weight, dimensions, and product type
     *
     * @return float
     */
    public function shipmentFee(): float
    {
        return max(
            $this->calculatorFeeHelper->weightFee($this->product),
            $this->calculatorFeeHelper->dimensionFee($this->product),
            $this->calculatorFeeHelper->productTypeFee($this->product),
        );
    }
}