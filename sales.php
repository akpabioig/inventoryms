<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = new DateTime($datesales);
$date = $date->format('m-d-Y');
echo $datesales = htmlspecialchars($_POST['purchasedate']); echo "<br>";
echo $customer = htmlspecialchars($_POST['customer']); echo "<br>";
echo $refcust = htmlspecialchars($_POST['refcust']);echo "<br>";
echo $deladdcust = htmlspecialchars($_POST['deladdcust']);echo "<br>";
echo $paytcust = htmlspecialchars($_POST['paytcust']);echo "<br>";
echo $messcust = htmlspecialchars($_POST['messcust']);echo "<br>";
echo $totunitcust = htmlspecialchars($_POST['totunitcust']);echo "<br>";
echo $subtotalcust = htmlspecialchars($_POST['subtotalcust']);echo "<br>";
echo $totalcost = htmlspecialchars($_POST['totalcost']);echo "<br>";

echo $salesid = htmlspecialchars($_POST['salesid']);echo "<br>";
echo $itemcustl = htmlspecialchars($_POST['itemcustl']);echo "<br>";
echo $product = htmlspecialchars($_POST['product']);echo "<br>";
echo $quancust = htmlspecialchars($_POST['quancust']);echo "<br>";
echo $costcust = htmlspecialchars($_POST['costcust']);echo "<br>";
echo $taxcust = htmlspecialchars($_POST['taxcust']);echo "<br>";
echo $discountcust = htmlspecialchars($_POST['discountcust']);echo "<br>";
echo $minitotal = htmlspecialchars($_POST['minitotal']);echo "<br>";
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
