<?php

require_once 'vendor/autoload.php';
require_once 'tests/TestHelper.php';

use App\Models\{
    OrderDetail,
    Product,
};

$phone = new Product('Iphone', 'IPH001', 50, 2, 0.1, 0.2, 0.3);
$detail = new OrderDetail(1, 50, 2, 3.3, $phone);

assertEquals(53.3, $detail->productPrice());

assertEquals(1, $detail->getId());
assertEquals(50, $detail->getPrice());
assertEquals(2, $detail->getQuantity());
assertEquals(3.3, $detail->getShipmentFee());
assertEquals($phone, $detail->getProduct());

$detail->setPrice(60);
$detail->setQuantity(3);
$detail->setShipmentFee(5);
assertEquals(60, $detail->getPrice());
assertEquals(3, $detail->getQuantity());
assertEquals(5, $detail->getShipmentFee());

echo "COMPLETE!";