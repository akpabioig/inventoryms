<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$purchasedate = htmlspecialchars($_POST['purchasedate']);
$date = new DateTime($purchasedate);
$date = $date->format('Y-m-d');
$supplier = htmlspecialchars($_POST['supplier']);
$ref = htmlspecialchars($_POST['ref']);
$messsupplier = htmlspecialchars($_POST['messsupplier']);
$totalunits = htmlspecialchars($_POST['totalunits']);
$subtotal = htmlspecialchars($_POST['subtotal']);
$totalcost = htmlspecialchars($_POST['totalcost']);

$pid = htmlspecialchars($_POST['pid']);
$productlocation = htmlspecialchars($_POST['productlocation']);
$productname = htmlspecialchars($_POST['productname']);
$quantity = htmlspecialchars($_POST['quantity']);
$itemcost = htmlspecialchars($_POST['itemcost']);
$tax = htmlspecialchars($_POST['tax']);
$itemtotal= htmlspecialchars($_POST['itemtotal']);

try {
    $sql = "INSERT INTO purchaseorder (supplierid, datepurchase, reference, messagesupplier, totalunits, subtotal, total)
VALUES ($supplier, '$purchasedate','$ref','$messsupplier', $totalunits, $subtotal, $totalcost)";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

try {
    $sql = "INSERT INTO purchaseitem (productid, productlocation, purchaseid, itemcost, quantity, tax, total)
VALUES ('$productname', '$productlocation',$pid, $itemcost, $quantity, $tax, $itemtotal)";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>
