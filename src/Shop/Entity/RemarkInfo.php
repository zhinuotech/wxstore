<?php

namespace sffi\weshop\Shop\Entity;

class RemarkInfo extends Entity
{
    protected $buyerMessage;

    protected $tradeMemo;

    public function __construct($message, $remark)
    {
        $this->buyerMessage = $message;
        $this->tradeMemo = $remark;
    }
}