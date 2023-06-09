<?php

namespace zntech\weshop\Shop;

use zntech\weshop\Base;

/**
 * @method array reqGetInfo() 获取商户信息
 * @method array reqGetCategoryList() 获取商家类目列表
 * @method array reqGetBrandList()   获取商家品牌列表
 * @method array reqUpdateInfo()    更新商户信息
 */
class Account extends Base
{
    /**
     * 获取商户信息
     * @return array
     */
    protected function getInfo()
    {
        return [];
    }
    /**
     * 获取商家类目列表
     * @return array
     */
    protected function getCategoryList()
    {
        return [];
    }

    /**获取商家品牌列表
     * @return array
     */
    protected function getBrandList()
    {
        return [];
    }

    /**
     * 更新商户信息
     * @param $path string 小程序path
     * @param $phone string 客服联系方式
     * @param $type int[] 客服类型，支持多个，0: 小程序官方客服，1: 自定义客服path 2: 联系电话
     * @return array
     */
    protected function updateInfo($path, $phone, $type)
    {
        return [
            "service_agent_path" => $path,
            "service_agent_phone" => $phone,
            "service_agent_type" => $type
        ];
    }
}