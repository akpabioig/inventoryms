<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = new DateTime($datesales);
$date = $date->format('Y-m-d');
$datesales = htmlspecialchars($_POST['datesales']);
$customer = htmlspecialchars($_POST['customer']);
$refcust = htmlspecialchars($_POST['refcust']);
$deladdcust = htmlspecialchars($_POST['deladdcust']);
$paytcust = htmlspecialchars($_POST['paytcust']);
$messcust = htmlspecialchars($_POST['messcust']);
$totunitcust = htmlspecialchars($_POST['totunitcust']);
$subtotalcust = htmlspecialchars($_POST['subtotalcust']);
$totalcost = htmlspecialchars($_POST['totalcost']);

$salesid = htmlspecialchars($_POST['salesid']);
$itemcustl = htmlspecialchars($_POST['itemcustl']);
$product = htmlspecialchars($_POST['product']);
$quancust = htmlspecialchars($_POST['quancust']);
$costcust = htmlspecialchars($_POST['costcust']);
$taxcust = htmlspecialchars($_POST['taxcust']);
$discountcust = htmlspecialchars($_POST['discountcust']);
$minitotal = htmlspecialchars($_POST['minitotal']);
/*
try {
    $sql = "INSERT INTO salesorder (datesales, customerid, reference, message, delAddress, paymenttype, totalunits, subtotal, totalcost)
VALUES ('$datesales', $customer,'$refcust', '$deladdcust', '$paytcust', '$messcust',$totunitcust, $subtotalcust, $totalcost)";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

try {
$sql = "INSERT INTO salesitem (sid, itemlocation, product, quantity, itemcost, tax, discount, total)
VALUES ($salesid, '$itemcustl',$product,$quancust, $costcust, $taxcust, $discountcust,$minitotal)";
$sth = $db->query($sql);
} catch(PDOException $e) {
echo $e->getMessage();
}
//header("Location: newsales.php");*/
?>
