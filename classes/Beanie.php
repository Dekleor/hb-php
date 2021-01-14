<?php

class Beanie
{
    const AVAILABLE_SIZES = ['S', 'M', 'L', 'XL'];
    const AVAILABLE_MATERIALS = ['wool', 'cashmere', 'silk', 'cotton'];

    public $cat;
    public $pic;
    public $name;
    public $price;
    public $desc;
    public $materials = [];
    public $sizes = [];

    public function getCat()
    {
        return $this->cat;
    }
    public function getPic()
    {
        return $this->pic;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDesc()
    {
        return $this->desc;
    }

    public function hasSize($size): bool
    {
        return in_array($size, $this->sizes);
    }

    public function hasMaterial($material): bool
    {
        return in_array($material, $this->materials);
    }
}