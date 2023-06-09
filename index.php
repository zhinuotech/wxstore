<?php
require 'vendor\autoload.php';
$config = require 'config\weshop.php';

$sss = \sffi\weshop\Factory::shop_account($config);
$res = $sss->reqGetBrandList();
var_dump($res);

$order = \sffi\weshop\Factory::shop_spu($config);
$skus = [];
$skus[] = new \sffi\weshop\Shop\Entity\Sku('1', '1', '', 1, 1, 10, '1000086', '0', []);
$product = new \sffi\weshop\Shop\Entity\ProductInfo('1','商品1', [], '份', [],new \sffi\weshop\Shop\Entity\DescInfo(), 430011, 0,);
print_r($order->reqAdd($product));


