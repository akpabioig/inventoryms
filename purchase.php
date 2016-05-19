<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = new DateTime($purchasedate);
$date = $date->format('Y-m-d');
$purchasedate = htmlspecialchars($_POST['purchasedate']);
$supplier = htmlspecialchars($_POST['supplier']);
$ref = htmlspecialchars($_POST['ref']);
$messsupplier = htmlspecialchars($_POST['messsupplier']);
$totalunit = htmlspecialchars($_POST['totalunit']);
$subtotal = htmlspecialchars($_POST['subtotal']);
$totalcost = htmlspecialchars($_POST['totalcost']);

$pid = htmlspecialchars($_POST['pid']);
$productlocation = htmlspecialchars($_POST['productlocation']);
$productname = htmlspecialchars($_POST['productname']);
$itemcost = htmlspecialchars($_POST['itemcost']);
$quantity = htmlspecialchars($_POST['quantity']);
$tax = htmlspecialchars($_POST['tax']);
$itemtotal = htmlspecialchars($_POST['itemtotal']);

try {
    $sql = "INSERT INTO purchaseorder (supplierid, datepurchase, reference, messagesupplier, totalunits, subtotal, total)
VALUES ($supplier, '$purchasedate','$ref','$messsupplier', $totalunit, $subtotal, $totalcost)";
    $sth = $db->query($sql);

    $sql3 = "INSERT INTO notifications (notification)
                VALUES ('Purchase Order {$pid} was Created')";
    $sth3 = $db->query($sql3);

} catch(PDOException $e) {
    echo $e->getMessage();
}

try {
    $sql1 = "INSERT INTO purchaseitem (productid, productlocation, purchaseid, itemcost, quantity, tax, total)
VALUES ($productname, '$productlocation',$pid, $itemcost, $quantity, $tax, $itemtotal)";
    $sth1 = $db->query($sql1);
} catch (PDOException $f) {
    echo $f->getMessage();
}

header("Location: newpurchase.php");
?>
