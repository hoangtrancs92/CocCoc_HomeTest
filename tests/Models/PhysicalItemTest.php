<?php

require_once 'vendor/autoload.php';
require_once 'tests/TestHelper.php';

use App\Models\PhysicalItem;

// PhysicalItem is abstract so need class to test it
class TestItem extends PhysicalItem {}

$item = new TestItem(0.3, 2, 0.1, 0.2);

assertEquals(0.3, $item->getWeight());
assertEquals(2.0, $item->getWidth());
assertEquals(0.1, $item->getHeight());
assertEquals(0.2, $item->getDepth());

echo "COMPLETE!";