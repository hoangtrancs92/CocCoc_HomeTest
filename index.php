<?php

use App\Models\Product;
use App\Services\OrderService;

require_once "vendor/autoload.php";

// Create a list of products
$productsData = [
    ['Iphone', 'IPH001', 50, 2, 0.1, 0.2, 0.3],
    ['Samsung', 'SAM001', 30, 0.5, 0.2, 0.2, 0.2],
    ['MacBook', 'MAC001', 120, 2.5, 0.3, 0.2, 0.5],
];

$products = [];
foreach ($productsData as $data) {
    $products[] = new Product(...$data);
}

// prepare purchase data
$productsWithQuantities = [
    ['product' => $products[0], 'quantity' => 2],
    ['product' => $products[1], 'quantity' => 1],
    ['product' => $products[2], 'quantity' => 3],
];

// create an order
$orderService = new OrderService();
$order = $orderService->createOrder($productsWithQuantities, 1);
$priceOfOrder = $orderService->calculateTotal($order);

// print results
print_r( 'Total = ' . $priceOfOrder);
