<?php

namespace zntech\weshop\Shop\Entity;

/**
 *
 */
class PriceInfo extends Entity
{
    /**
     * @var int 该订单最终的实付金额（单位：分），order_price = 商品总价 + freight + additional_price - discounted_price
     */
    protected $orderPrice;
    /**
     * @var int 运费（单位：分）
     */
    protected $freight;
    /**
     * @var int 附加金额（单位：分）
     */
    protected $additionalPrice = 0;
    /**
     * @var string 附加金额备注
     */
    protected $additionalRemarks = '';
    /**
     * @var int 优惠金额（单位：分）
     */
    protected $discountedPrice = 0;

    /**
     * @param int $orderPrice
     * @param int $freight
     * @param int $additionalPrice
     * @param int $discountedPrice
     * @param string $additionalRemarks
     */
    public function __construct(int $orderPrice, int $freight, int $additionalPrice=0, string $additionalRemarks='', int $discountedPrice=0)
    {
        $this->orderPrice = $orderPrice;
        $this->freight = $freight;
        $this->additionalPrice = $additionalPrice;
        $this->additionalRemarks = $additionalRemarks;
        $this->discountedPrice = $discountedPrice;
    }
}