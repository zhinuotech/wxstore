<?php

namespace sffi\weshop\Shop;

use sffi\weshop\Base;
use sffi\weshop\Shop\Entity\BrandInfo;
use sffi\weshop\Shop\Entity\CategoryInfo;

/**
 * @method reqAuditBrand($license, $bradInfo)       品牌审核
 * @method reqAuditCategory($license, $bradInfo)    类目审核
 * @method reqGetMiniappCertificate($license, $bradInfo)    类目审核
 */
class Audit extends Base
{
    /**
     * @param $license string 营业执照或组织机构代码证
     * @param $brandInfo BrandInfo 品牌信息
     * @return array[]
     */
    protected function auditBrand($license,BrandInfo $brandInfo)
    {
        return [
            'audit_req' => [
                'license' => $license,                                        #营业执照或组织机构代码证，图片url/media_id
                'brand_info'    =>  $brandInfo
            ]
        ];
    }

    protected function auditCategory($license,CategoryInfo $categoryInfo)
    {
        return [
            'license'       => $license,
            'category_info' => $categoryInfo
        ];
    }

    /**
     * @param $type int 1:类目 2:品牌
     * @return array
     */
    protected function getMiniappCertificate($type)
    {
        return [
            'req_type'  =>  $type
        ];
    }
}