<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['salesid'])) {
    $salesId = $_GET['salesid'];

    try {
        $sql = "DELETE FROM salesorder
                    WHERE sid = {$salesId}";
        $sth = $db->query($sql);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("Location: pendingorders.php");
} else {
    header("Location: pendingorders.php");
}
?>