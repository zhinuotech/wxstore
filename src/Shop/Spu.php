<?php

namespace zntech\weshop\Shop;

use zntech\weshop\Base;
use zntech\weshop\Shop\Entity\DescInfo;
use zntech\weshop\Shop\Entity\ProductInfo;
use zntech\weshop\Shop\Entity\Sku;

/**
 * @method reqAdd(ProductInfo $info) 新增商品
 * @method reqUpdate(ProductInfo $info) 修改商品
 * @method reqUpdateWithoutAudit(int $goodsId,string $title,string $path,string[] $headImg,string[] $qualiPics,[] $info,int $catId,int $brandId,string $infoVersion,array $sku) 修改商品
 * @method reqDel(int $productId,int $goodsId) 删除商品
 * @method reqDelAudit(int $productId,int $goodsId) 撤销上架
 * @method reqGet(int $productId,int $goodsId) 查询商品
 * @method reqGetList(int $productId,int $goodsId) 商品列表
 * @method reqListing(int $productId,int $goodsId) 上架商品
 * @method reqDelisting(int $productId,int $goodsId) 下架商品
 */
class Spu extends Base
{

    protected function add(ProductInfo $product)
    {
        return $product;
    }

    /**
     * 删除商品
     * @param $productId int 微信商品ID
     * @param $goodsId int 本地商品ID
     * @return array
     */
    protected function del($goodsId, $productId = 0)
    {
        return [
            'product_id'    =>  $productId,
            'out_product_id'    =>  $goodsId
        ];
    }

    /**
     * 撤销上架审核
     * @param $productId int 微信商品ID
     * @param $goodsId int 本地商品ID
     * @return array
     */
    protected function delAudit($goodsId, $productId = 0)
    {
        return [
            'productId' => $productId,
            'out_product_id'    =>  $goodsId
        ];
    }

    /**
     * 获取商品
     * @param $productId int 微信商品ID
     * @param $goodsId int 本地商品ID
     * @param int|bool $isOnline 默认0:获取线上数据, 1:获取草稿数据
     * @return array
     */
    protected function get($goodsId, $productId = 0, $isOnline = false)
    {
        return [
            'product_id'=>$productId,
            'out_product_id'=> $goodsId,
            'need_edit_spu'=> $isOnline ? 1: 0
        ];
    }

    /**
     * 获取商品列表
     * @param $page integer
     * @param $size int
     * @param $status int 0:初始值 5:上架 11:自主下架 13:违规下架/风控系统下架
     * @param int $isOnline
     * @param array $createTime
     * @param array $updateTime
     * @return array
     */
    protected function getList($page, $size, $status, $isOnline=0, $createTime=[], $updateTime=[])
    {
        return [
            'status' => $status,
            'start_create_time' => $createTime[0],
            'end_create_time' => $createTime[1],
            'start_update_time' => $updateTime[0],
            'end_update_time' => $updateTime[1],
            'page' => $page,
            'page_size' => $size,
            'need_edit_spu' => $isOnline,
        ];
    }

    protected function update(ProductInfo $info)
    {
        return $info;
    }

    protected function updateWithoutAudit($goodsId, $path, $sku)
    {
        return [
            'out_product_id'    =>  $goodsId,
            'path'    =>  $path,
            'skus'    =>  $sku
        ];
    }

    protected function listing($productId, $goodsId=0)
    {
        return [
            'product_id'=>$productId,
            'out_product_id'=> $goodsId,
        ];
    }
}