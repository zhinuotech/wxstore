<?php

namespace zntech\weshop\Shop\Entity;

class OrderDetail extends Entity
{
    /**
     * @var int 门店ID
     */
    protected $shopId;
    /**
     * @var int 导购ID
     */
    protected $dgId;
    /**
     * @var Cart[] 产品信息
     */
    protected $productInfos;
    /**
     * @var PayInfo 支付信息
     */
    protected $payInfo;
    /**
     * @var PriceInfo 价格信息
     */
    protected $priceInfo;
    /**
     * @var BuyerInfo 购买者信息
     */
    protected $buyerInfo;
    /**
     * @var RemarkInfo 备注信息
     */
    protected $remarkInfo;

    public function pushCart(Cart $cart)
    {
        $this->productInfos[] = $cart;
        return $this;
    }

    public function setPayInfo(PayInfo $payInfo)
    {
        $this->payInfo = $payInfo;
        return $this;
    }

    public function setRemarkInfo(RemarkInfo $remarkInfo)
    {
        $this->remarkInfo = $remarkInfo;
        return $this;
    }

    public function setBuyerInfo(BuyerInfo $info)
    {
        $this->buyerInfo = $info;
        return $this;
    }

    public function setShop($id)
    {
        $this->shopId = $id;
        return $this;
    }

    public function setDg($id)
    {
        $this->dgId = $id;
        return $this;
    }
}