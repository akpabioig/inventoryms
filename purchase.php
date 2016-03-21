<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = new DateTime($purchasedate);
$date = $date->format('Y-m-d');
echo $purchasedate = htmlspecialchars($_POST['purchasedate']); echo "<br>";
echo $supplier = htmlspecialchars($_POST['supplier']); echo "<br>";
echo $ref = htmlspecialchars($_POST['ref']); echo "<br>";
echo $messsupplier = htmlspecialchars($_POST['messsupplier']); echo "<br>";
echo $totalunits = htmlspecialchars($_POST['totalunits']); echo "<br>";
echo $subtotal = htmlspecialchars($_POST['subtotal']); echo "<br>";
echo $totalcost = htmlspecialchars($_POST['totalcost']); echo "<br>";

echo $pid = htmlspecialchars($_POST['pid']); echo "<br>";
echo $productlocation = htmlspecialchars($_POST['productlocation']); echo "<br>";
echo $productname = htmlspecialchars($_POST['productname']); echo "<br>";
echo $quantity = htmlspecialchars($_POST['quantity']); echo "<br>";
echo $itemcost = htmlspecialchars($_POST['itemcost']); echo "<br>";
echo $tax = htmlspecialchars($_POST['tax']); echo "<br>";
echo $itemtotal= htmlspecialchars($_POST['itemtotal']); echo "<br>";
/*
try {
    $sql = "INSERT INTO purchaseorder (supplierid, datepurchase, reference, messagesupplier, totalunits, subtotal, total)
VALUES ($supplier, '$purchasedate','$ref','$messsupplier', $totalunits, $subtotal, $totalcost)";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

try {
    $sql = "INSERT INTO purchaseitem (productid, productlocation, purchaseid, itemcost, quantity, tax, total)
VALUES ($productname, '$productlocation',$pid, $itemcost, $quantity, $tax, $itemtotal)";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

//header("Location: newpurchase.php");*/
?>
