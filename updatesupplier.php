<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$suppn = htmlspecialchars($_POST['suppn']);
$contp = htmlspecialchars($_POST['contp']);
$contppn = htmlspecialchars($_POST['contppn']);
$supptel = htmlspecialchars($_POST['supptel']);
$suppfax = htmlspecialchars($_POST['suppfax']);
$url = htmlspecialchars($_POST['url']);
$email = htmlspecialchars($_POST['email']);
$desc = htmlspecialchars($_POST['desc']);
$add1 = htmlspecialchars($_POST['add1']);
$add2 = htmlspecialchars($_POST['add2']);
$town = htmlspecialchars($_POST['town']);
$county = htmlspecialchars($_POST['county']);
$postcode = htmlspecialchars($_POST['postcode']);
$country = htmlspecialchars($_POST['country']);
$suppid = htmlspecialchars($_POST['suppid']);
try {
    $sql = "UPDATE addsupplier
                SET suppliername = '{$suppn}',
                    contactperson = '{$contp}',
                    contactpersontel = '{$contppn}',
                    telnumber = '{$supptel}',
                    fax = '{$suppfax}',
                    email = '{$email}',
                    url = '{$url}',
                    description = '{$desc}',
                    addressline1 = '{$add1}',
                    addressline2 = '{$add2}',
                    town = '{$town}',
                    county = '{$county}',
                    postcode = '{$postcode}',
                    country = '{$country}'
                    WHERE supplierid = {$suppid}";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}
header("Location: supplierseditor.php");
?>