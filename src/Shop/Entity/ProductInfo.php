<?php
namespace zntech\weshop\Shop\Entity;

class ProductInfo extends Entity
{
    protected $outProductId;
    protected $path;

    /**
     * @var string 标题
     */
    protected $title;

    /**
     * @var string[] 主图,多张,列表
     */
    protected $headimg;

    /**
     * @var string 单位名称 例如：斤，个，份，套
     */
    protected $unitname;

    /**
     * @var string[] 商品资质图
     */
    protected $qualificationPics;

    /**
     * @var DescInfo 描述信息
     */
    protected  $descInfo;

    /**
     * @var int 第三级类目ID
     */
    protected  $thirdCatId;
    /**
     * @var string 版本信息
     */
    protected $infoVersion;
    /**
     * @var int 品牌ID
     */
    protected  $brandId;

    /**
     * @var Sku[] 库存管理
     */
    protected $skus = [];

    /**
     * @var string[] 配送方式 1快递 2同城 3上门自提 4点餐
     */
    protected $pickUpType;

    /**
     * @var int 快递费
     */
    protected $expressFee;

    /**
     * @var string 商品属性，如：1、预售商品，2、虚拟电子凭证商品，3、自定义
     */
    protected $productType;

    /**
     * @var string 定时上架时间
     */
    protected $sellTime;

    /**
     * @param $outProductId
     * @param string $title
     * @param string[] $headimg
     * @param string $unitname 商品单位名称 例如：斤，个，份，套
     * @param string[] $qualificationPics 商品资质图片
     * @param DescInfo $descInfo
     * @param int $thirdCatId 第三级类目ID
     * @param string $infoVersion
     * @param int $brandId
     * @param Sku[] $skus
     * @param string[] $pickUpType
     * @param int $expressFee
     * @param string $productType
     * @param string $sellTime
     */
    public function __construct($outProductId, string $title, array $headimg, string $unitname, array $qualificationPics
        , DescInfo $descInfo, int $thirdCatId, int $brandId, array $skus, array $pickUpType=null,
                                int $expressFee = 0, string $productType = '', string $sellTime='', string $infoVersion='')
    {
        $this->outProductId = $outProductId;
        $this->title = $title;
        $this->headimg = $headimg;
        $this->unitname = $unitname;
        $this->qualificationPics = $qualificationPics;
        $this->descInfo = $descInfo;
        $this->thirdCatId = $thirdCatId;
        $this->infoVersion = $infoVersion;
        $this->brandId = $brandId;
        $this->skus = $skus;
        $this->pickUpType = $pickUpType;
        $this->expressFee = $expressFee;
        $this->productType = $productType;
        $this->sellTime = $sellTime;
        $this->path = defined('MINI_SHOP_PRODUCT_DETAIL_PATH') ? MINI_SHOP_PRODUCT_DETAIL_PATH : '';
    }


    /**
     * @return string
     */
    public function getUnitname(): string
    {
        return $this->unitname;
    }

    /**
     * @param string $unitname
     */
    public function setUnitname(string $unitname)
    {
        $this->unitname = $unitname;
        return $this;
    }

    /**
     * @return int
     */
    public function getThirdCatId(): int
    {
        return $this->thirdCatId;
    }

    /**
     * @param int $thirdCatId
     */
    public function setThirdCatId(int $thirdCatId)
    {
        $this->thirdCatId = $thirdCatId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfoVersion(): string
    {
        return $this->infoVersion;
    }

    /**
     * @param string $infoVersion
     */
    public function setInfoVersion(string $infoVersion)
    {
        $this->infoVersion = $infoVersion;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandId(): int
    {
        return $this->brandId;
    }

    /**
     * @param int $brandId
     */
    public function setBrandId(int $brandId)
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPickUpType(): array
    {
        return $this->pickUpType;
    }

    /**
     * @param string[] $pickUpType
     */
    public function setPickUpType(array $pickUpType)
    {
        $this->pickUpType = $pickUpType;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpressFee(): int
    {
        return $this->expressFee;
    }

    /**
     * @param int $expressFee
     */
    public function setExpressFee(int $expressFee)
    {
        $this->expressFee = $expressFee;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    public function setProductType(string $productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellTime(): string
    {
        return $this->sellTime;
    }

    public function setSellTime(string $sellTime)
    {
        $this->sellTime = $sellTime;
        return $this;
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
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getOutProductId()
    {
        return $this->outProductId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string[]
     */
    public function getHeadimg(): array
    {
        return $this->headimg;
    }

    /**
     * @return string[]
     */
    public function getQualificationPics(): array
    {
        return $this->qualificationPics;
    }

    /**
     * @return DescInfo
     */
    public function getDescInfo(): DescInfo
    {
        return $this->descInfo;
    }

    /**
     * @return Sku[]
     */
    public function getSkus(): array
    {
        return $this->skus;
    }
}