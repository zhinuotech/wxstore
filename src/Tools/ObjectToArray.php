<?php

namespace sffi\weshop\Tools;

use sffi\weshop\Shop\Entity\Entity;

class ObjectToArray
{
    protected $reflection;
    protected $result = [];
    public function __construct(Entity $object)
    {
        $this->reflection = new \ReflectionClass($object);
        $properties = $this->reflection->getProperties();
        foreach ($properties as $property) {
            $property->setAccessible(true);
            $key = $property->getName();
            $value = $property->getValue($object);
            if ($value instanceof Entity) {
                $this->result[Str::snake($key)] = (new ObjectToArray($value))->toArray();
            }else{
                $this->result[Str::snake($key)] = $value;
            }
        }
    }

    public function toArray(): array
    {
        return $this->result;
    }
}