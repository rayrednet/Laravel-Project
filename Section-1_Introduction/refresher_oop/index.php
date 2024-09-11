<?php

require_once 'classes/MobilePhone.php';
require_once 'classes/Smartphone.php';
require_once 'classes/InventoryManager.php';

$inventory = new InventoryManager();

$phone1 = new Smartphone("Galaxy S21", "Samsung", 999, 10, "Android");
$phone2 = new MobilePhone("Nokia 3310", "Nokia", 59, 100);

$inventory->addPhone($phone1);
$inventory->addPhone($phone2);

$inventory->displayInventory();
$phone1->displayInfo();

?>
