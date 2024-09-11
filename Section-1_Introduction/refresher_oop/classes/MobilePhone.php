<?php

class MobilePhone {
    private $name;
    private $brand;
    private $price;
    private $stockQuantity;

    public function __construct($name, $brand, $price, $stockQuantity) {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->stockQuantity = $stockQuantity;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getStockQuantity() {
        return $this->stockQuantity;
    }

    public function setStockQuantity($stockQuantity) {
        $this->stockQuantity = $stockQuantity;
    }
}

?>
