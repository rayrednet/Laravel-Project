<?php

require_once 'classes/MobilePhone.php';
require_once 'classes/Smartphone.php';
require_once 'classes/InventoryManager.php';

$inventory = new InventoryManager();

$phone1 = new Smartphone("Galaxy S21", "Samsung", 999, 10, "Android");
$phone2 = new MobilePhone("Nokia 3310", "Nokia", 59, 100);

$inventory->addPhone($phone1);
$inventory->addPhone($phone2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Inventory</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Mobile Inventory</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Operating System</th>
        </tr>
        <?php
        foreach ($inventory->displayInventory() as $phone) {
            echo "<tr>";
            echo "<td>" . $phone->getName() . "</td>";
            echo "<td>" . $phone->getBrand() . "</td>";
            echo "<td>" . $phone->getPrice() . "</td>";
            echo "<td>" . $phone->getStockQuantity() . "</td>";
            echo "<td>" . (method_exists($phone, 'getOperatingSystem') ? $phone->getOperatingSystem() : 'N/A') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
