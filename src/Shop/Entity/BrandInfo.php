<?php

namespace sffi\weshop\Shop\Entity;

class BrandInfo extends Entity
{
    protected $brandAuditType;
    protected $trademarkType;
    protected $brandManageType;
    protected $commodityOriginType;
    protected $brandWording;
    protected $saleAuthorization;
    protected $trademarkRegistrationCertificate;
    protected $trademarkChangeCertificate;
    protected $trademarkRegistrant;
    protected $trademarkRegistrantNu;
    protected $trademarkAuthorizationPeriod;
    protected $trademarkRegisterApplication;
    protected $trademarkApplicant;
    protected $trademarkApplicationTime;
    protected $importedGoodsForm;

    /**
     * @param mixed $trademarkChangeCertificate
     */
    public function setTrademarkChangeCertificate($trademarkChangeCertificate): void
    {
        $this->trademarkChangeCertificate = $trademarkChangeCertificate;
    }

    /**
     * @param mixed $importedGoodsForm
     */
    public function setImportedGoodsForm($importedGoodsForm): void
    {
        $this->importedGoodsForm = $importedGoodsForm;
    }

    /**
     * 生成代理TM标
     * @param $brandAuditType
     * @param $trademarkType
     * @param $brandManageType
     * @param $commodityOriginType
     * @param $brandWording
     * @param $saleAuthorization
     * @param $trademarkRegistrantNu
     * @param $trademarkRegisterApplication
     * @param $trademarkApplicant
     * @param $trademarkApplicationTime
     */
    public function generalProxyTMBrand($brandAuditType, $trademarkType, $brandManageType, $commodityOriginType, $brandWording, $saleAuthorization, $trademarkRegistrantNu, $trademarkRegisterApplication, $trademarkApplicant, $trademarkApplicationTime)
    {
        $this->brandAuditType = $brandAuditType;
        $this->trademarkType = $trademarkType;
        $this->brandManageType = $brandManageType;
        $this->commodityOriginType = $commodityOriginType;
        $this->brandWording = $brandWording;
        $this->saleAuthorization = $saleAuthorization;
        $this->trademarkRegistrantNu = $trademarkRegistrantNu;
        $this->trademarkRegisterApplication = $trademarkRegisterApplication;
        $this->trademarkApplicant = $trademarkApplicant;
        $this->trademarkApplicationTime = $trademarkApplicationTime;
    }

    /**
     * 生成代理品牌R标
     * @param $brandAuditType
     * @param $trademarkType
     * @param $brandManageType
     * @param $commodityOriginType
     * @param $brandWording
     * @param $saleAuthorization
     * @param $trademarkRegistrationCertificate
     * @param $trademarkRegistrant
     * @param $trademarkRegistrantNu
     * @param $trademarkAuthorizationPeriod
     */
    public function generalProxyRBrand($brandAuditType, $trademarkType, $brandManageType, $commodityOriginType, $brandWording, $saleAuthorization, $trademarkRegistrationCertificate, $trademarkRegistrant, $trademarkRegistrantNu, $trademarkAuthorizationPeriod)
    {
        $this->brandAuditType = $brandAuditType;
        $this->trademarkType = $trademarkType;
        $this->brandManageType = $brandManageType;
        $this->commodityOriginType = $commodityOriginType;
        $this->brandWording = $brandWording;
        $this->saleAuthorization = $saleAuthorization;
        $this->trademarkRegistrationCertificate = $trademarkRegistrationCertificate;
        $this->trademarkRegistrant = $trademarkRegistrant;
        $this->trademarkRegistrantNu = $trademarkRegistrantNu;
        $this->trademarkAuthorizationPeriod = $trademarkAuthorizationPeriod;
    }

    /**
     * 生成自有品牌TM标
     * @param $brandAuditType
     * @param $trademarkType
     * @param $brandManageType
     * @param $commodityOriginType
     * @param $brandWording
     * @param $trademarkRegistrantNu
     * @param $trademarkRegisterApplication
     * @param $trademarkApplicant
     * @param $trademarkApplicationTime
     */
    public function generalSelfTMBrand($brandAuditType, $trademarkType, $brandManageType, $commodityOriginType,
                                       $brandWording, $trademarkRegistrantNu, $trademarkRegisterApplication,
                                       $trademarkApplicant, $trademarkApplicationTime)
    {
        $this->brandAuditType = $brandAuditType;
        $this->trademarkType = $trademarkType;
        $this->brandManageType = $brandManageType;
        $this->commodityOriginType = $commodityOriginType;
        $this->brandWording = $brandWording;
        $this->trademarkRegistrantNu = $trademarkRegistrantNu;
        $this->trademarkRegisterApplication = $trademarkRegisterApplication;
        $this->trademarkApplicant = $trademarkApplicant;
        $this->trademarkApplicationTime = $trademarkApplicationTime;
    }

    /**
     * @param $brandAuditType
     * @param $trademarkType
     * @param $brandManageType
     * @param $commodityOriginType
     * @param $brandWording
     * @param $saleAuthorization
     * @param $trademarkRegistrationCertificate
     * @param $trademarkChangeCertificate
     * @param $trademarkRegistrant
     * @param $trademarkRegistrantNu
     * @param $trademarkAuthorizationPeriod
     * @param $trademarkRegisterApplication
     * @param $trademarkApplicant
     * @param $trademarkApplicationTime
     * @param $importedGoodsForm
     */
    public function generalSelfRBrand($brandAuditType, $trademarkType, $brandManageType, $commodityOriginType,
                                      $brandWording, $trademarkRegistrationCertificate, $trademarkRegistrant,
                                      $trademarkRegistrantNu, $trademarkAuthorizationPeriod,
                                      $trademarkRegisterApplication)
    {
        $this->brandAuditType = $brandAuditType;
        $this->trademarkType = $trademarkType;
        $this->brandManageType = $brandManageType;
        $this->commodityOriginType = $commodityOriginType;
        $this->brandWording = $brandWording;
        $this->trademarkRegistrationCertificate = $trademarkRegistrationCertificate;
        $this->trademarkRegistrant = $trademarkRegistrant;
        $this->trademarkRegistrantNu = $trademarkRegistrantNu;
        $this->trademarkAuthorizationPeriod = $trademarkAuthorizationPeriod;
        $this->trademarkRegisterApplication = $trademarkRegisterApplication;
    }


}