<?php

require_once 'vendor/autoload.php';
require_once 'tests/TestHelper.php';

use App\Services\ShipmentFeeService;
use App\Models\Product;

$phone = new Product('Iphone', 'IPH001', 50, 2, 0.1, 0.2, 0.3);
$shipFee = new ShipmentFeeService($phone);

// max(3.3, 0.44, 0) = 3.3
assertEquals(3.3, $shipFee->shipmentFee());

echo "COMPLETE!";