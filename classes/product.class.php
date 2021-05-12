<?php

// Product class
class Product {
    public $name;
    
    public function __construct(string $_name)
    {
        $this->name = $_name;
    }
    
    public function getProduct()
    {
        return $this->name;
    }
}

// Specifics subclass
class Specifics extends Product {
    public $brand;
    public $sector;
    public $price;

    public function __construct(string $_name, string $_brand, string $_sector, float $_price)
    {
        parent::__construct($_name);
        $this->brand = $_brand;
        $this->sector = $_sector;
        $this->price = $_price;
    }

    public function getProductDetails()
    {
        return "<strong>Brand:</strong> " . $this->brand . "<br>" . "<strong>Sector:</strong> " . $this->sector . "<br>" . "<strong>Total price:</strong> " . $this->price . "€";
    }
}