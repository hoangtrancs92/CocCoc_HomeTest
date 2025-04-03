<?php

namespace App\Services;

use App\Models\{
    Order,
    OrderDetail,
};

class OrderService
{
    /**
     * Creates an order from a list of products and their quantities.
     *
     * @param array $productsWithQuantities
     * @param int $orderId
     * @return Order
     */
    public function createOrder(array $productsWithQuantities, int $orderId): Order
    {
        $orderDetails = [];
        $detailId = 1;
        foreach ($productsWithQuantities as $item) {
            $product = $item['product'];
            $quantity = $item['quantity'];
            $shipmentFeeService = new ShipmentFeeService($product);
            $shipmentFee = $shipmentFeeService->shipmentFee();
            $orderDetails[] = new OrderDetail(
                $detailId++,
                $product->getPrice(),
                $quantity,
                $shipmentFee,
                $product,
            );
        }

        $order = new Order($orderId, $orderDetails);
        $total = $this->calculateTotal($order);
        $order->setTotal($total);

        return $order;
    }

    /**
     * Calculates the total value of an order based on its details.
     *
     * @param Order $order
     * @return float
     */
    public function calculateTotal(Order $order): float
    {
        $total = 0;
        foreach ($order->getOrderDetails() as $orderDetail) {
            $total += $orderDetail->productPrice() * $orderDetail->getQuantity();
        }

        return $total;
    }
}