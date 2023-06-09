<?php

namespace sffi\weshop\Shop\Entity;

class CategoryInfo extends Entity
{
    protected $level1;
    protected $level2;
    protected $level3;
    protected $certificate;

    /**
     * @param $level1
     * @param $level2
     * @param $level3
     * @param $certificate
     */
    public function __construct($level1, $level2, $level3, $certificate)
    {
        $this->level1 = $level1;
        $this->level2 = $level2;
        $this->level3 = $level3;
        $this->certificate = $certificate;
    }


}