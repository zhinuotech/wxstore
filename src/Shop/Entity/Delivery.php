<?php

namespace zntech\weshop\Shop\Entity;

class Delivery extends Entity
{
    protected $deliveryId;
    protected $waybillId;

    /**
     * @param $deliveryId string 快递公司ID
     * @param $waybillId string 快递单号
     */
    public function __construct($deliveryId, $waybillId)
    {
        $this->deliveryId = $deliveryId;
        $this->waybillId = $waybillId;
    }


}