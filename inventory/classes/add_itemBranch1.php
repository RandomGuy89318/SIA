<?php
include __DIR__ . '/function.php';

session_start();

if (isset($_POST['additem']) && $_SESSION['Role'] == 'Admin') {
    // Collect POST data
    $itemname = $_POST['itemname'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $supplier = $_POST['supplier'];
    $quantity = $_POST['quantity'];
    $unitprice = $_POST['unitprice'];

    // Call addItem function
    $request = addItemBranch1($itemname, $brand, $category, $description, $supplier, $quantity, $unitprice);

    // Redirect based on result
    if ($request) {
        header("Location: ../dashboard.php?section=inventoryBranch1");
        alert("Item added successfully!");
        exit;  
    } else {
        header("Location: ../dashboard.php?section=inventoryBranch1");
        exit;
    }
}
?>