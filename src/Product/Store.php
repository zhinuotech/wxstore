<?php

namespace zntech\weshop\Product;
use zntech\weshop\Base;

/**
 * @method reqGetShopcat()
 */
class Store extends Base
{
    protected $specialUrl = [
        'getShopcat'    =>  'get_shopcat'
    ];
    protected function getShopcat()
    {
        return [];
    }
}