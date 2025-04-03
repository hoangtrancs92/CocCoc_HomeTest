<?php

require_once 'vendor/autoload.php';
require_once 'tests/TestHelper.php';

use App\Helpers\CalculatorFeeHelper;
use App\Config\Common;
use App\Models\Product;

$common = new Common();
$calculatorFeeHelper = new CalculatorFeeHelper($common);
$phone = new Product('Iphone', 'IPH001', 50, 2, 0.1, 0.2, 0.3);

assertEquals(3.3, $calculatorFeeHelper->weightFee($phone));
assertEquals(0.44, round($calculatorFeeHelper->dimensionFee($phone), 5));
assertEquals(0, $calculatorFeeHelper->productTypeFee($phone));

echo "COMPLETE!";