<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = new DateTime($datesales);
$date = $date->format('Y-m-d');
echo $datesales = htmlspecialchars($_POST['datesales']);
echo "<br>";
echo $customer = htmlspecialchars($_POST['customer']);
echo "<br>";
echo $refcust = htmlspecialchars($_POST['refcust']);
echo "<br>";
echo $deladdcust = htmlspecialchars($_POST['deladdcust']);
echo "<br>";
echo $paytcust = htmlspecialchars($_POST['paytcust']);
echo "<br>";
echo $messcust = htmlspecialchars($_POST['messcust']);
echo "<br>";
echo $totunitcust = htmlspecialchars($_POST['totunitcust']);
echo "<br>";
echo $subtotalcust = htmlspecialchars($_POST['subtotalcust']);
echo "<br>";
echo $totalcost = htmlspecialchars($_POST['totalcost']);
echo "<br>";

echo $salesid = htmlspecialchars($_POST['salesid']);
echo "<br>";
echo $itemcustl = htmlspecialchars($_POST['itemcustl']);
echo "<br>";
echo $selproduct = htmlspecialchars($_POST['selproduct']);
echo "<br>";
echo $quancust = htmlspecialchars($_POST['quancust']);
echo "<br>";
echo $costcust = htmlspecialchars($_POST['costcust']);
echo "<br>";
echo $taxcust = htmlspecialchars($_POST['taxcust']);
echo "<br>";
echo $discountcust = htmlspecialchars($_POST['discountcust']);
echo "<br>";
echo $minitotal = htmlspecialchars($_POST['minitotal']);
echo "<br>";
/*
try {
    $sql = "INSERT INTO salesorder (datesales, customerid, reference, message, delAddress, paymenttype, totalunits, subtotal, totalcost)
VALUES ('$datesales', $customer,'$refcust', '$messcust', '$deladdcust', '$paytcust', ,$totunitcust, $subtotalcust, $totalcost)";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

try {
$sql = "INSERT INTO salesitem (sid, itemlocation, productid, quantity, itemcost, tax, discount, total)
VALUES ($salesid, '$itemcustl', '$selproduct', $quancust, $costcust, $taxcust, $discountcust, $minitotal)";
$sth = $db->query($sql);
} catch(PDOException $e) {
echo $e->getMessage();
}*/
?>
