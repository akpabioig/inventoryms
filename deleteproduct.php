<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['prodid'])) {
    $prodId = $_GET['prodid'];

    try {
        $sql = "DELETE FROM addproduct
                    WHERE productid = {$prodId}";
        $sth = $db->query($sql);


        $query1 = "select * from dashboard_totals";
        $result1 = mysqli_query($db, $query1);

        $sql4 = "SELECT productname from addproduct where productid = {$prodId}";
        $sth4 = $db->query($sth4);

        $sql3 = "INSERT INTO notifications (notification)
                    VALUES ('Product: {$sth4} was deleted')";
        $sth3 = $db->query($sql3);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("Location: productseditor.php");
} else {
    header("Location: productseditor.php");
}
?>