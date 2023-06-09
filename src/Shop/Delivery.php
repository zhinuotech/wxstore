<?php

namespace zntech\weshop\Shop;

use zntech\weshop\Base;
use \zntech\weshop\Shop\Entity\Delivery as DeliveryEntity;

/**
 * @method reqGetCompanyList() 获取快递公司列表
 * @method reqSend($orderId, $openId,bool $isFinish,array $deliveryList) 发货 $deliveryList是类\zntech\weshop\Shop\Entity\Delivery实例
 * @method reqRecieve()
 */
class Delivery extends Base
{
    protected function getCompanyList()
    {
        return [];
    }

    /**
     * 发货
     * @param $orderId string
     * @param $openId string
     * @param $isFinish bool
     * @param DeliveryEntity[] $deliveryList
     * @return array
     */
    protected function send($orderId, $openId,bool $isFinish,array $deliveryList)
    {
        return [
            'out_order_id'  =>  $orderId,
            'openid'   => $openId,
            'finish_all_delivery'   =>  $isFinish ? 1 : 0,
            'delivery_list' =>  $deliveryList
        ];
    }

    /**
     * 收货
     * @param $orderId
     * @param $openId
     * @return array
     */
    protected function recieve($orderId, $openId)
    {
        return  [
            'out_order_id' => $orderId,
            'openid'    =>  $openId
        ];
    }
}