<?php

namespace App\Models;

class Order
{
    private int $id;
    private float $total;
    private array $orderDetails;

    /**
     * @param int $id
     * @param array $orderDetails
     */
    public function __construct(int $id, array $orderDetails)
    {
        $this->id = $id;
        $this->orderDetails = $orderDetails;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    public function getOrderDetails(): array
    {
        return $this->orderDetails;
    }
}