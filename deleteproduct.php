<?php
include('connection.php');
$db1 = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['prodid'])) {
    $prodId = $_GET['prodid'];

    $q = "SELECT productname from addproduct where productid = {$prodId} LIMIT 1";
    $qReturn = mysqli_query($db1, $q);
    while($qReturn = $qReturn ->fetch_array()){

    }
    try {
        $sql = "DELETE FROM addproduct
                    WHERE productid = {$prodId}";
        $sth = $db1->query($sql);

        $sql3 = "INSERT INTO notifications (notification)
                    VALUES ('Product: {$qResult} was deleted')";
        $sth3 = $db1->query($sql3);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("Location: productseditor.php");
} else {
    header("Location: productseditor.php");
}
?>