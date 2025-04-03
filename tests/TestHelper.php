<?php

/**
 * assertEquals function helper testing
 *
 * @param mixed $expected
 * @param mixed $actual
 */
function assertEquals($expected, $actual)
{
    if ($expected != $actual) {
        echo "Test Failed. Expected: $expected, Got: $actual\n";
    } else {
        echo "Test Passed\n";
    }
}