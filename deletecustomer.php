<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 12:30 PM
 *
 */
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['custid'])) {
    $customerId = $_GET['custid'];

    try {
        $sql1 = "DELETE FROM addcustomer
                        WHERE customerid = {$customerId}";
        $sth1 = $db->query($sql1);

        $sql3 = "INSERT INTO notifications (notification)
                            VALUES ('Customer: {$customerId} was Deleted')";
        $sth3 = $db->query($sql3);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("Location: customerseditor.php");

} else {
    header("Location: customerseditor.php");
}

?>