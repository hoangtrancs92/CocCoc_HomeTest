<?php

namespace App\Config;

class Common
{
    private const WEIGHT_COEFFICIENT = 11;
    private const DIMENSION_COEFFICIENT = 11;

    /**
     * Retrieves the coefficient based on the given parameter.
     *
     * @param string $params The coefficient name ('weightCoefficient' or 'dimensionCoefficient').
     * @return float
     */
    public function getCoefficient(string $params): float
    {
        $coefficients = [
            'weightCoefficient' => self::WEIGHT_COEFFICIENT,
            'dimensionCoefficient' => self::DIMENSION_COEFFICIENT,
        ];

        return $coefficients[$params];
    }
}
