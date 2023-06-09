<?php

namespace sffi\weshop\Shop\Entity;

class DeliveryDetail extends Entity
{
    protected $deliveryType;

    public function __construct($deliveryType = 3)
    {
        $this->deliveryType = $deliveryType;
    }
}