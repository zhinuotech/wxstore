<?php

namespace sffi\weshop\Shop;

use sffi\weshop\Base;

/**
 * @method reqApply() 申请接入
 * @method reqCheck() 获取接入状态
 * @method reqApplyScene($scene) 场景接入申请
 * @method reqFinishAccessInfo($step) 完成接入任务
 */
class Register extends Base
{
    protected function apply()
    {
        return [];
    }

    protected function check(){
        return [];
    }

    /**完成接入任务
     * @param $step int 6:完成spu接口，7:完成订单接口，8:完成物流接口，9:完成售后接口，10:测试完成，11:发版完成
     * @return array
     */
    protected function finishAccessInfo(int $step = 6)
    {
        return [
            'access_info_item'  => $step
        ];
    }

    /**场景接入申请
     * @param int $scene 1:视频号、公众号场景
     * @return array|int[]
     */
    protected function applyScene(int $scene = 1)
    {
        return [
            'scene_group' => $scene
        ];
    }
}