<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 12:30 PM
 *
 */

$prodId = $_GET['prodid'];
include ('connection.php');
$queryNotifications = "select productname from addproduct where productid = {$prodId} LIMIT 1";
$resultNotifications = mysqli_query($db, $queryNotifications);
while($countNotifications = $resultNotifications->fetch_array()) {
    $qResult = $countNotifications[0];
}

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['prodid'])) {

    try {
        $sql = "DELETE FROM addproduct
                    WHERE productid = {$prodId}";
        $sth = $db->query($sql);

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