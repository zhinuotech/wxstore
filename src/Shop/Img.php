<?php

namespace zntech\weshop\Shop;

use zntech\weshop\Base;


/**
 * @method reqUpload()
 */
class Img extends Base
{
    protected function upload($upType = 0, $imgUrl = '')
    {
        $res = [
            'resp_type' =>  1, #0:此参数返回media_id，目前只用于品牌申请品牌和类目，推荐使用1：返回临时链接
            'upload_type' =>  $upType, #0:图片流，1:图片url
        ];
        if ($upType) {
            $res['img_url'] = $imgUrl;
        }
        return $res;
    }
}