<?php

namespace sffi\weshop\Shop\Entity;

class Order extends Entity
{
    /**
     * @var string 订单创建时间
     */
    protected $createTime;
    /**
     * @var string 本地订单号
     */
    protected $outOrderId;
    /**
     * @var string 用户在小程序的openId
     */
    protected $openId;
    /**
     * @var string 订单路径 小程序获取
     */
    protected $path;
    /**
     * @var string 场景值 小程序获取
     */
    protected $scene;
    /**
     * @var int 本地用户ID
     */
    protected $outUserId;
    /**
     * @var OrderDetail 订单详情
     */
    protected $orderDetail;
    /**
     * @var array ['delivery_type'=>$type] 1: 正常快递, 2: 无需快递, 3: 线下配送, 4: 用户自提 （默认1）
     */
    protected $deliveryDetail;
    /**
     * @var AddressInfo 地址信息
     */
    protected $addressInfo;
    /**
     * @var ServiceOrder[] 服务子订单列表
     */
    protected $serviceOrders;

    public function __construct($orderId, $openId, $scene)
    {
        $this->createTime = date('Y-m-d H:i:s');
        $this->outOrderId = $orderId;
        $this->openId = $openId;
        $this->path = defined('MINI_SHOP_ORDER_DETAIL_PATH') ? MINI_SHOP_ORDER_DETAIL_PATH : '';
        $this->scene = $scene;
    }

    public function setOrderDetail($orderDetail)
    {
        $this->orderDetail = $orderDetail;
        return $this;
    }

    public function setAddressInfo($addressInfo)
    {
        $this->addressInfo = $addressInfo;
        return $this;
    }


    public function pushServiceOrder($serviceOrder)
    {
        $this->serviceOrders[] = $serviceOrder;
        return $this;
    }

    public function clearServiceOrders()
    {
        $this->serviceOrders = [];
        return $this;
    }
}