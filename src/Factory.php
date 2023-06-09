<?php

namespace sffi\weshop;

use Exception;
use sffi\weshop\Product\Brand;
use sffi\weshop\Product\Category;
use sffi\weshop\Product\Coupon;
use sffi\weshop\Product\Delivery;
use sffi\weshop\Product\Order as pOrder;
use \sffi\weshop\Product\Img as pImg;
use \sffi\weshop\Product\Spu as pSpu;
use sffi\weshop\Product\Sku;
use sffi\weshop\Product\Store;

use sffi\weshop\Shop\Account;
use sffi\weshop\Shop\Audit;
use sffi\weshop\Shop\Cat;
use sffi\weshop\Shop\Img;
use sffi\weshop\Shop\Order;
use sffi\weshop\Shop\Register;
use sffi\weshop\Shop\Spu;

/**
 * @method static Brand product_brand($config=[])
 * @method static Category product_category($config=[])
 * @method static Coupon product_coupon($config=[])
 * @method static Delivery product_delivery($config=[])
 * @method static pImg product_img($config=[])
 * @method static pOrder product_order($config=[])
 * @method static Sku product_sku($config=[])
 * @method static pSpu product_spu($config=[])
 * @method static Store product_store($config=[])


 * @method static Account shop_account($config=[])
 * @method static Audit shop_audit($config=[])
 * @method static Cat shop_cat($config=[])
 * @method static Img shop_img($config=[])
 * @method static Register shop_register($config=[])
 * @method static Order shop_order($config=[])
 * @method static Spu shop_spu($config=[])
 */
class Factory
{
    protected static function make($name,$args)
    {
        list($dir, $class) = explode('_', $name);
        $className = 'sffi\weshop\\'.ucfirst($dir).'\\'.ucfirst($class);
        if (class_exists($className)) {
            return new $className(...$args);
        }
        throw new Exception($className.'不存在');
    }

    public static function __callStatic($name, $arguments)
    {
        return self::make($name, $arguments);
    }
}
