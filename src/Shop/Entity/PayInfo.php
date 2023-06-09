<?php

namespace zntech\weshop\Shop\Entity;

class PayInfo extends Entity
{
    /**
     * @var int 0: 微信支付, 1: 货到付款, 2: 商家会员储蓄卡（默认0）
     */
    protected $payMethodType;
    /**
     * @var string 预支付ID
     */
    protected $prepayId;
    /**
     * @var string 预支付时间
     */
    protected $prepayTime;

    /**
     * @param int $payMethodType
     * @param string|null $prepayId
     * @param string|null $prepayTime
     */
    public function __construct(int $payMethodType, string $prepayId = '', string $prepayTime = '')
    {
        $this->payMethodType = $payMethodType;
        $this->prepayId = $prepayId;
        $this->prepayTime = $prepayTime;
    }
}