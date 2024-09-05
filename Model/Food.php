<?php
class Food extends Category
{
    public function __construct($name, $price, $category)
    {
        parent::__construct($name, $price, $category);
    }
}
