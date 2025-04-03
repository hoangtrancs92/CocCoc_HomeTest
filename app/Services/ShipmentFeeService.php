<?php

namespace App\Services;

use App\Config\Common;
use App\Helpers\CalculatorFeeHelper;
use App\Models\Product;

class ShipmentFeeService
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Calculate the shipment fee another type of shipment
     *
     * @return float
     */
    public function shipmentFee()
    {
        $common = new Common();
        $calculatorFeeHelper = new CalculatorFeeHelper($common);

        return max(
            $calculatorFeeHelper->weightFee($this->product),
            $calculatorFeeHelper->dimensionFee($this->product),
            $calculatorFeeHelper->productTypeFee($this->product),
        );
    }
}