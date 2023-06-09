<?php

namespace sffi\weshop\Shop\Entity;

class Sku extends Entity
{
    protected $outProductId;
    protected $outSkuId;
    protected $thumbImg;
    protected $salePrice;
    protected $marketPrice;
    protected $stockNum;
    protected $skuCode;
    protected $barcode;
    protected $skuAttrs;

    /**
     * @param $outProductId int
     * @param $outSkuId int
     * @param $thumbImg string
     * @param $salePrice int
     * @param $marketPrice int
     * @param $stockNum int
     * @param $skuCode string
     * @param $barcode string
     * @param $skuAttrs array
     */
    public function __construct($outProductId, $outSkuId, $thumbImg, $salePrice, $marketPrice, $stockNum, $skuCode, $barcode, $skuAttrs)
    {
        $this->outProductId = $outProductId;
        $this->outSkuId = $outSkuId;
        $this->thumbImg = $thumbImg;
        $this->salePrice = $salePrice;
        $this->marketPrice = $marketPrice;
        $this->stockNum = $stockNum;
        $this->skuCode = $skuCode;
        $this->barcode = $barcode;
        $this->skuAttrs = $skuAttrs;
    }

    /**
     * @return mixed
     */
    public function getOutProductId()
    {
        return $this->outProductId;
    }

    /**
     * @return mixed
     */
    public function getOutSkuId()
    {
        return $this->outSkuId;
    }

    /**
     * @return mixed
     */
    public function getThumbImg()
    {
        return $this->thumbImg;
    }

    /**
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @return mixed
     */
    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * @return mixed
     */
    public function getStockNum()
    {
        return $this->stockNum;
    }

    /**
     * @return mixed
     */
    public function getSkuCode()
    {
        return $this->skuCode;
    }

    /**
     * @return mixed
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @return mixed
     */
    public function getSkuAttrs()
    {
        return $this->skuAttrs;
    }

}