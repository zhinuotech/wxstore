<?php

namespace zntech\weshop\Shop\Entity;

class BuyerInfo extends Entity
{
    protected $deliveryName;

    protected $deliveryMobile;

    protected $deliveryAddress;

    protected $province;

    protected $city;

    protected $area;

    protected $zipCode;

    protected $lastedchangeTime;

    /**
     * @param $deliveryName
     * @param $deliveryMobile
     * @param $deliveryAddress
     * @param $province
     * @param $city
     * @param $area
     * @param $zipCode
     */
    public function __construct($deliveryName, $deliveryMobile, $deliveryAddress, $province, $city, $area, $zipCode)
    {
        $this->deliveryName = $deliveryName;
        $this->deliveryMobile = $deliveryMobile;
        $this->deliveryAddress = $deliveryAddress;
        $this->province = $province;
        $this->city = $city;
        $this->area = $area;
        $this->zipCode = $zipCode;
        $this->lastedchangeTime = date('Y-m-d H:i:s');
    }


}