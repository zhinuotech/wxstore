<?php

namespace sffi\weshop\Shop\Entity;

class AddressInfo extends Entity
{
    /**
     * @var string 收件人姓名
     */
    protected $receiverName;
    /**
     * @var string 详细收货地址信息
     */
    protected $detailedAddress;
    /**
     * @var string 收件人手机号码
     */
    protected $telNumber;
    /**
     * @var string 国家
     */
    protected $country;
    /**
     * @var string 省份
     */
    protected $province;
    /**
     * @var string 城市
     */
    protected $city;
    /**
     * @var string 乡镇
     */
    protected $town;

    /**
     * @param $receiverName
     * @param $detailedAddress
     * @param $telNumber
     * @param $country
     * @param $city
     * @param $town
     */
    public function __construct($receiverName, $detailedAddress, $telNumber, $country='', $city='', $town='')
    {
        $this->receiverName = $receiverName;
        $this->detailedAddress = $detailedAddress;
        $this->telNumber = $telNumber;
        $this->country = $country;
        $this->city = $city;
        $this->town = $town;
    }
}