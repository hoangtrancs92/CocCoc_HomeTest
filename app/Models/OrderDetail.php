<?php

namespace App\Models;

use App\Models\Product;

class OrderDetail
{
    private int $id;
    private float $price;
    private int $quantity;
    private float $shipmentFee;
    private Product $product;

    /**
     * @param int $id
     * @param float $price
     * @param int $quantity
     * @param float $shipmentFee
     * @param Product $product
     */
    public function __construct(int $id, float $price, int $quantity, float $shipmentFee, Product $product)
    {
        $this->id = $id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->shipmentFee = $shipmentFee;
        $this->product = $product;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getShipmentFee(): float
    {
        return $this->shipmentFee;
    }

    public function setShipmentFee(float $shipmentFee): void
    {
        $this->shipmentFee = $shipmentFee;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    public function productPrice()
    {
        return $this->price + $this->shipmentFee;
    }
}