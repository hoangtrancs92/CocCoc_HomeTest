<?php

require_once 'vendor/autoload.php';
require_once 'tests/TestHelper.php';

use App\Config\Common;

$common = new Common();

assertEquals(11, $common->getCoefficient('weightCoefficient'));
assertEquals(11, $common->getCoefficient('dimensionCoefficient'));

echo "COMPLETE!";