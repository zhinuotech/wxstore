<?php

namespace sffi\weshop\Shop\Entity;

class Cart extends Entity
{
    protected $outSkuId;
    protected $salePrice;
    protected $realPrice;
    protected $path;
    protected $outProductId;
    protected $productCnt;
    protected $title;
    protected $headImg;

    public function __construct(ProductInfo $product,Sku $sku, $price, $number)
    {
        $this->outProductId = $sku->getOutProductId();
        $this->outSkuId = $sku->getOutSkuId();
        $this->salePrice = $sku->getSalePrice();
        $this->realPrice = $price;
        $this->title = $product->getTitle();
        $this->headImg = $sku->getThumbImg();
        $this->productCnt = $number;
        $this->path = defined('MINI_SHOP_PRODUCT_DETAIL_PATH') ? MINI_SHOP_PRODUCT_DETAIL_PATH : '';
    }
}