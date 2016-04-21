<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['purid'])) {
    $purchaseId = $_GET['purid'];

    try {
        $sql = "DELETE FROM purchaseorder
                    WHERE purchaseid = {$purchaseId}";
        $sth = $db->query($sql);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("Location: pendingorders.php");
} else {
    header("Location: pendingorders.php");
}
?>