<?php

require_once 'vendor/autoload.php';
require_once 'tests/TestHelper.php';

use App\Models\{
    Order,
    OrderDetail,
    Product,
};

$product = new Product('Iphone', 'IPH001', 50, 2, 0.1, 0.2, 0.3);
$orderDetail = new OrderDetail(1, 50, 2, 3.3, $product);
$order = new Order(1, [$orderDetail]);
assertEquals(1, $order->getId());
assertEquals([$orderDetail], $order->getOrderDetails());

$order->setId(2);
$order->setTotal(106.6);
assertEquals(2, $order->getId());
assertEquals(106.6, $order->getTotal());

echo "COMPLETE!";