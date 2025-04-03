<?php

require_once 'vendor/autoload.php';
require_once 'tests/TestHelper.php';

use App\Services\OrderService;
use App\Models\Product;

$phone = new Product('Iphone', 'IPH001', 50, 2, 0.1, 0.2, 0.3);
$items = [['product' => $phone, 'quantity' => 2]];
$service = new OrderService();

$order = $service->createOrder($items, 1);
 // 2 * (50 + 3.3) = 106.6
assertEquals(106.6, $order->getTotal());

echo "COMPLETE!";