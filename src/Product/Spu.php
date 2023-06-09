<?php

namespace sffi\weshop\Product;

use sffi\weshop\Base;


/**
 * @method reqGetList($page, $size, $status, $isEdit = false)
 */
class Spu extends Base
{
    protected $specialUrl = [
        'getList'   =>  'get_list'
    ];

    public function getList($page, $size, $status, $isEdit = false)
    {
        $data = [
            "status"=> $status,
            "page"=> $page,
            "page_size"=> $size,
            "need_edit_spu"=> (bool)$isEdit
        ];
        return $data;
    }
}