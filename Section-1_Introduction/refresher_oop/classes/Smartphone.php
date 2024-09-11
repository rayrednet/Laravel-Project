<?php

require_once 'MobilePhone.php';

class Smartphone extends MobilePhone {
    private $operatingSystem;

    public function __construct($name, $brand, $price, $stockQuantity, $operatingSystem) {
        parent::__construct($name, $brand, $price, $stockQuantity);
        $this->operatingSystem = $operatingSystem;
    }

    public function getOperatingSystem() {
        return $this->operatingSystem;
    }

    public function setOperatingSystem($operatingSystem) {
        $this->operatingSystem = $operatingSystem;
    }

    public function displayInfo() {
        echo "Name: " . $this->getName() . ", Brand: " . $this->getBrand() . ", Price: " . $this->getPrice() . ", Stock: " . $this->getStockQuantity() . ", OS: " . $this->operatingSystem . "\n";
    }
}

?>
