<?php

namespace sffi\weshop\Product;
use sffi\weshop\Base;

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