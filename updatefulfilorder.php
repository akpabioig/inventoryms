<?php
include('connection.php');
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['salesid'])) {
    $soId = $_GET['salesid'];
    $sqlselect = "SELECT * FROM salesorder WHERE sid = $soId";
    $getResult = mysqli_query($db, $sqlselect);

    try {
        $sql = "UPDATE salesorder
                SET status = 'fulfilled'
                    WHERE sid = {$soId}";
        $sth = $db->query($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    try {
        $sql1 = "UPDATE stocklevel, salesorder, salesitem
                SET stocklevel.stockbalance = stocklevel.stockbalance + salesitem.quantity
                WHERE stocklevel.productid = salesitem.productid
                AND salesitem.sid = salesorder.sid
                AND salesorder.status = 'fulfilled'
                AND salesorder.sid = {$soId}";
        $sth1 = $db->query($sql1);
    } catch (PDOException $f) {
        echo $f->getMessage();
    }

}

    if (isset($_GET['purid'])) {
        $poId = $_GET['purid'];
        $sqlselect1 = "SELECT * FROM purchaseorder WHERE purchaseid = $poId";
        $getResult1 = mysqli_query($db, $sqlselect1);

        try {
            $sql2 = "UPDATE purchaseorder
                SET status = 'fulfilled'
                    WHERE purchaseid = {$poId}";
            $sth2 = $db->query($sql2);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

header("Location: pendingorders.php");
?>