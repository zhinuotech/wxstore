<?php

namespace sffi\weshop\Shop;

use sffi\weshop\Base;
use \sffi\weshop\Shop\Entity\Order as OrderEntity;

/**
 * @method reqAdd(OrderEntity $order) 下单
 * @method reqGet($orderId, $openId) 获取单个订单
 * @method reqGetList($page, $size, $sort, $startTime, $endTime) 获取订单列表
 * @method reqPaySuccess($orderId, $openId, $payTime, $transactionId='', $remark='')  同步订单付款成功状态
 * @method reqPay($orderId, $openId, $actionType, $actionRemark=null, $transactionId=null, $payTime=null) 同步订单状态
 */
class Order extends Base
{
    /**
     * 下单
     * @param OrderEntity $order
     * @return OrderEntity
     */
    protected function add(OrderEntity $order)
    {
        return $order;
    }

    /**
     * 同步支付状态
     * @param $orderId string 商家自定义订单ID
     * @param $openId string 用户的openid
     * @param $actionType int 类型，默认1:支付成功,2:支付失败,3:用户取消,4:超时未支付;5:商家取消;10:其他原因取消
     * @param $actionRemark string 其他具体原因
     * @param $transactionId string 支付订单号，action_type=1且order/add时传的pay_method_type=0时必填
     * @param $payTime string 支付完成时间，action_type=1时必填，yyyy-MM-dd HH:mm:ss
     * @return array
     */
    protected function pay($orderId, $openId, $actionType, $actionRemark, $transactionId, $payTime) {
        return [
            'out_order_id'  =>  $orderId,
            'openid'    =>  $openId,
            'action_type'    =>  $actionType,
            'action_remark'    =>  $actionRemark,
            'transaction_id'    =>  $transactionId,
            'pay_time'    =>  $payTime,
        ];
    }

    /**
     * 同步支付成功状态
     * @param $orderId
     * @param $openId
     * @param $payTime
     * @param string $transactionId
     * @return array
     */
    protected function paySuccess($orderId, $openId, $payTime, $transactionId='', $remark='') {
        return $this->pay($orderId, $openId, 1, $remark, $transactionId, $payTime);
    }

    protected function get($orderId, $openId)
    {
        return [
            'out_order_id' => $orderId,
            'openid'    =>  $openId
        ];
    }

    protected function getList($page, $size, $sort, $startTime, $endTime)
    {
        return [
            "page"=>$page,
            "page_size"=> $size,
            "sort_order"=>$sort,
            "start_create_time"=> $startTime,
            "end_create_time"=> $endTime
        ];
    }
}