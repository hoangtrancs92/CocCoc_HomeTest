
<?php

require_once 'vendor/autoload.php';
require_once 'tests/TestHelper.php';

use App\Models\Product;

$product = new Product('Iphone', 'IPH001', 50, 2, 0.1, 0.2, 0.3);
assertEquals(0.04, round($product->dimensionProduct(), 5));

assertEquals('Iphone', $product->getName());
assertEquals('IPH001', $product->getCode());
assertEquals(50, $product->getPrice());
assertEquals(2.0, $product->getWidth());
assertEquals(0.1, $product->getHeight());
assertEquals(0.2, $product->getDepth());
assertEquals(0.3, $product->getWeight());

$product->setName('Samsung');
$product->setCode('SAM001');
$product->setPrice(60);
assertEquals('Samsung', $product->getName());
assertEquals('SAM001', $product->getCode());
assertEquals(60, $product->getPrice());

echo "COMPLETE!";