<?php

class Category extends Product
{
    public $category;

    public function __construct($name, $price, $category)
    {
        parent::__construct($name, $price);
        $this->category = $category;
    }
}
