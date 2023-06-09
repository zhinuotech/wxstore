<?php

namespace zntech\weshop;

use Exception;
use zntech\weshop\Product\Brand;
use zntech\weshop\Product\Category;
use zntech\weshop\Product\Coupon;
use zntech\weshop\Product\Delivery;
use zntech\weshop\Product\Order as pOrder;
use \zntech\weshop\Product\Img as pImg;
use \zntech\weshop\Product\Spu as pSpu;
use zntech\weshop\Product\Sku;
use zntech\weshop\Product\Store;

use zntech\weshop\Shop\Account;
use zntech\weshop\Shop\Audit;
use zntech\weshop\Shop\Cat;
use zntech\weshop\Shop\Img;
use zntech\weshop\Shop\Order;
use zntech\weshop\Shop\Register;
use zntech\weshop\Shop\Spu;

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
        $className = 'zntech\weshop\\'.ucfirst($dir).'\\'.ucfirst($class);
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
