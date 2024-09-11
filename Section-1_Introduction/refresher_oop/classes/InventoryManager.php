<?php

require_once 'MobilePhone.php';

class InventoryManager {
    private $inventory = array();

    public function addPhone(MobilePhone $phone) {
        $this->inventory[] = $phone;
    }

    public function deletePhone($name) {
        foreach ($this->inventory as $key => $phone) {
            if ($phone->getName() === $name) {
                unset($this->inventory[$key]);
                echo "Phone deleted: " . $name . "\n";
                return;
            }
        }
        echo "Phone not found: " . $name . "\n";
    }

    public function updatePhone($name, $brand, $price, $stockQuantity) {
        foreach ($this->inventory as $phone) {
            if ($phone->getName() === $name) {
                $phone->setBrand($brand);
                $phone->setPrice($price);
                $phone->setStockQuantity($stockQuantity);
                echo "Phone updated: " . $name . "\n";
                return;
            }
        }
        echo "Phone not found: " . $name . "\n";
    }

    public function displayInventory() {
        foreach ($this->inventory as $phone) {
            echo "Name: " . $phone->getName() . ", Brand: " . $phone->getBrand() . ", Price: " . $phone->getPrice() . ", Stock: " . $phone->getStockQuantity() . "\n";
        }
    }
}

?>
