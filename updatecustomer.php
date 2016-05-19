<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$type = htmlspecialchars($_POST['type']);
$custn = htmlspecialchars($_POST['custn']);
$custtel = htmlspecialchars($_POST['custtel']);
$custfax = htmlspecialchars($_POST['custfax']);
$custurl = htmlspecialchars($_POST['custurl']);
$custemail = htmlspecialchars($_POST['custemail']);
$desc = htmlspecialchars($_POST['desc']);
$custadd1 = htmlspecialchars($_POST['custadd1']);
$custadd2 = htmlspecialchars($_POST['custadd2']);
$ctown = htmlspecialchars($_POST['ctown']);
$ccounty = htmlspecialchars($_POST['ccounty']);
$cpostc = htmlspecialchars($_POST['cpostc']);
$ccountry = htmlspecialchars($_POST['ccountry']);
$custid = htmlspecialchars($_POST['custid']);
try {
    $sql = "UPDATE addcustomer
                SET customertype = '{$type}',
                    customername = '{$custn}',
                    telnumber = '{$custtel}',
                    fax = '{$custfax}',
                    url = '{$custurl}',
                    email = '{$custemail}',
                    description = '{$desc}',
                    addressline1 = '{$custadd1}',
                    addressline2 = '{$custadd2}',
                    town = '{$ctown}',
                    county = '{$ccounty}',
                    postcode = '{$cpostc}',
                    country = '{$ccountry}'
                    WHERE customerid = {$custid}";
    $sth = $db->query($sql);

    $sql3 = "INSERT INTO notifications (notification)
                    VALUES ('Customer {$custn} was updated')";
    $sth3 = $db->query($sql3);

} catch(PDOException $e) {
    echo $e->getMessage();
}
header("Location: customerseditor.php");
?>