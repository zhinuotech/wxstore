<?php

namespace sffi\weshop\Shop\Entity;

class DescInfo extends Entity
{
    /**
     * @var string 描述
     */
    protected $desc;
    /**
     * @var string[] 图片url列表
     */
    protected $imgs = [];
}