<?php

namespace App\Config;

class Common
{
    /**
     * Retrieves the coefficient based on the given parameter.
     *
     * @param string $params The coefficient name ('weightCoefficient' or 'dimensionCoefficient').
     * @return float
     */
    public function getCoefficient(string $params): float
    {
        $array = [
            'weightCoefficient' => 11,
            'dimensionCoefficient' => 11,
        ];

        return $array[$params];
    }
}
