<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$datesales = htmlspecialchars($_POST['purchasedate']);
$date = new DateTime($datesales);
$date = $date->format('m-d-Y');
$soid = htmlspecialchars($_POST['soid']);
$customer = htmlspecialchars($_POST['customer']);
$refcust = htmlspecialchars($_POST['refcust']);
$deladdcust = htmlspecialchars($_POST['deladdcust']);
$paytcust = htmlspecialchars($_POST['paytcust']);
$messcust = htmlspecialchars($_POST['messcust']);
$totunitcust = htmlspecialchars($_POST['totunitcust']);
$subtotalcust = htmlspecialchars($_POST['subtotalcust']);
$totalcost = htmlspecialchars($_POST['totalcost']);

$itemcustl = htmlspecialchars($_POST['itemcustl']);
$itemcustn = htmlspecialchars($_POST['itemcustn']);
$quancust = htmlspecialchars($_POST['quancust']);
$costcust = htmlspecialchars($_POST['costcust']);
$taxcust = htmlspecialchars($_POST['taxcust']);
$discountcust = htmlspecialchars($_POST['discountcust']);
$minitotal = htmlspecialchars($_POST['minitotal']);

try {
    $sql = "INSERT INTO salesorder (datesales, sid, customerid, reference, message, delAddress, paymenttype, totalunits, subtotal, totalcost)
VALUES ($datesales, $soid,$customer,'$refcust', '$deladdcust', '$paytcust', '$messcust',$totunitcust, $subtotalcust, $totalcost)";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

try {
$sql = "INSERT INTO salesitem (sid, itemlocation, itemname, quantity, itemcost, tax, discount, total)
VALUES ($soid, '$itemcustl','$itemcustn',$quancust, $costcust, $taxcust, $discountcust,$minitotal)";
$sth = $db->query($sql);
} catch(PDOException $e) {
echo $e->getMessage();
}
?>
