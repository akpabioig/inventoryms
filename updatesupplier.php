<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


echo $suppn = htmlspecialchars($_POST['suppn']); echo "<br>";
echo $contp = htmlspecialchars($_POST['contp']); echo "<br>";
echo $contppn = htmlspecialchars($_POST['contppn']); echo "<br>";
echo $supptel = htmlspecialchars($_POST['supptel']); echo "<br>";
echo $suppfax = htmlspecialchars($_POST['suppfax']); echo "<br>";
echo $suppurl = htmlspecialchars($_POST['suppurl']); echo "<br>";
echo $suppemail = htmlspecialchars($_POST['suppemail']); echo "<br>";
echo $desc = htmlspecialchars($_POST['desc']); echo "<br>";
echo $add1 = htmlspecialchars($_POST['add1']); echo "<br>";
echo $add2 = htmlspecialchars($_POST['add2']); echo "<br>";
echo $town = htmlspecialchars($_POST['town']); echo "<br>";
echo $county = htmlspecialchars($_POST['county']); echo "<br>";
echo $postcode = htmlspecialchars($_POST['postcode']); echo "<br>";
echo $country = htmlspecialchars($_POST['country']); echo "<br>";
echo $suppid = htmlspecialchars($_POST['suppid']); echo "<br>";
/*
try {
    $sql = "UPDATE addsupplier
                SET suppliername = '{$suppn}',
                    contactperson = '{$contp}',
                    contactpersontel = '{$contppn}',
                    telnumber = '{$supptel}',
                    fax = '{$suppfax}',
                    email = {$suppurl},
                    url = {$suppurl},
                    description = {$desc}
                    addressline1 = '{$add1}',
                    addressline2 = {$add2},
                    town = {$town},
                    county = {$county}
                    postcode = '{$postcode}',
                    country = {$country},
                    WHERE supplierid = {$suppid}";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}
header("Location: allsupplier.php");*/
?>