<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 12:30 PM
 *
 */

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


echo $pnum = htmlspecialchars($_POST['pnum']); echo "<br>";
echo $pname = htmlspecialchars($_POST['pname']); echo "<br>";
echo $desc = htmlspecialchars($_POST['desc']); echo "<br>";
echo $isp = htmlspecialchars($_POST['isp']); echo "<br>";
echo $wp = htmlspecialchars($_POST['wp']); echo "<br>";
echo $rp = htmlspecialchars($_POST['rp']); echo "<br>";
echo $supplier = htmlspecialchars($_POST['supplier']); echo "<br>";
echo $loccode = htmlspecialchars($_POST['loccode']); echo "<br>";
echo $prodid = htmlspecialchars($_POST['prodid']);
/*
    try {
        $sql = "UPDATE addproduct
                SET productserialnumber = {$pnum},
                    productname = {$pname},
                    productdescription = {$desc},
                    locationid = {$loccode},
                    supplierid = {$supplier},
                    initialstockprice = {$isp},
                    wholesaleprice = {$wp},
                    retailprice = {$rp}
                    WHERE productid = {$prodid}";
        $sth = $db->query($sql);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
header("Location: addproduct.php");*/
?>