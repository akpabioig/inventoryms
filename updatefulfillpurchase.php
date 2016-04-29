<?php
include('connection.php');
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['purid'])) {
    $poId = $_GET['purid'];
    $sqlselect1 = "SELECT * FROM purchaseorder WHERE purchaseid = $poId";
    $getResult1 = mysqli_query($db, $sqlselect1);

    try {
        $sql2 = "UPDATE purchaseorder
            SET status = 'fulfilled'
                WHERE purchaseid = {$poId}";
        $sth2 = $db->query($sql2);
    } catch (PDOException $g) {
        echo $g->getMessage();
    }

    try {
        $sql3 = "UPDATE stocklevel, purchaseorder, purchaseitem
            SET stocklevel.stockbalance = stocklevel.stockbalance + purchaseitem.quantity
            WHERE stocklevel.productid = purchaseitem.productid
            AND purchaseitem.purchaseid = purchaseorder.purchaseid
            AND purchaseorder.status = 'fulfilled'
            AND purchaseorder.purchaseid = {$poId}";
        $sth3 = $db->query($sql3);
    } catch (PDOException $h) {
        echo $h->getMessage();
    }

    try {
        $sql4 = "UPDATE stocklevel
            SET stocklevel.level = 'STOCK LEVEL ... OK !!!'
                WHERE stocklevel.stockbalance > 49";
        $sth4 = $db->query($sql4);
    } catch (PDOException $h) {
        echo $h->getMessage();
    }

}
header("Location: pendingorders.php");
?>