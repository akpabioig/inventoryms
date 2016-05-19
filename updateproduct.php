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


$pnum = htmlspecialchars($_POST['pnum']);
$pname = htmlspecialchars($_POST['pname']);
$desc = htmlspecialchars($_POST['desc']);
$isp = htmlspecialchars($_POST['isp']);
$wp = htmlspecialchars($_POST['wp']);
$rp = htmlspecialchars($_POST['rp']);
$supplier = htmlspecialchars($_POST['supplier']);
$loccode = htmlspecialchars($_POST['loccode']);
$prodid = htmlspecialchars($_POST['prodid']);

    try {
        $sql = "UPDATE addproduct
                SET productserialnumber = '{$pnum}',
                    productname = '{$pname}',
                    productdescription = '{$desc}',
                    locationid = '{$loccode}',
                    supplierid = '{$supplier}',
                    initialstockprice = {$isp},
                    wholesaleprice = {$wp},
                    retailprice = {$rp}
                    WHERE productid = {$prodid}";
        $sth = $db->query($sql);
        $sql3 = "INSERT INTO notifications (notification)
                    VALUES ('Product {$pname} was updated')";
        $sth3 = $db->query($sql3);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
header("Location: productseditor.php");
?>