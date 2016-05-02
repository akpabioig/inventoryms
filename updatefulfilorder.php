<?php
include('connection.php');

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['salesid'])) {
    $soId = $_GET['salesid'];
    $sqlselect = "SELECT * FROM salesorder WHERE sid = $soId";
    $getResult = mysqli_query($db, $sqlselect);

    $result1 = $db->query("SELECT stocklevel.stockbalance
                FROM stocklevel, salesitem, salesorder
                WHERE stocklevel.productid = salesitem.productid
                AND salesitem.sid = salesorder.sid
                AND salesorder.sid = {$soId}");
    $result1->setFetchMode(PDO::FETCH_ASSOC);
    $stockbalance = $result1->fetchAll()[0]['stockbalance'];

    $result2 = $db->query("SELECT quantity
                FROM salesitem
                WHERE sid = {$soId}");
    $result2->setFetchMode(PDO::FETCH_ASSOC);
    $stockordered = $result2->fetchAll()[0]['quantity'];

    $result3 = $db->query("SELECT purchaseitem.productid
                    FROM purchaseitem, purchaseorder
                    WHERE purchaseorder.purchaseid = purchaseitem.purchaseid
                    AND purchaseorder.status = 'pending'");
    $result3->setFetchMode(PDO::FETCH_ASSOC);
    $purchasepend = $result3->fetchAll()[0]['productid'];

    $result4 = $db->query("SELECT salesitem.productid
                            FROM salesitem, salesorder
                            WHERE salesorder.sid = salesitem.sid
                            AND salesorder.status = 'pending'
                            AND salesorder.sid = {$soId}");
    $result4->setFetchMode(PDO::FETCH_ASSOC);
    $salespend = $result4->fetchAll()[0]['productid'];


    if ($stockordered > $stockbalance) {
        echo "<script type='text/javascript'>
        alert('CANNOT FULFIL ORDER BECAUSE STOCK LEVEL TOO LOW !!!');
        window.location.replace('pendingorders.php');
        </script>";
        if ($purchasepend == $salespend) {
            echo "<script type='text/javascript'>
                alert('PRODUCT BEING ORDER IS AWAITING FULFILLMENT FROM SUPPLIER !!! '<BR>' ***** DO NOT REORDER **** ');
                window.location.replace('pendingorders.php');
                </script>";
            return;
        } else if ($purchasepend !== $salespend) {
            echo "<script type='text/javascript'>
                alert(' REORDER STOCK !!! ');
                window.location.replace('pendingorders.php');
            </script>";
            return;
        }
        } else if ($stockordered <= $stockbalance) {
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
        SET stocklevel.stockbalance = stocklevel.stockbalance - salesitem.quantity
        WHERE stocklevel.productid = salesitem.productid
        AND salesitem.sid = salesorder.sid
        AND salesorder.status = 'fulfilled'
        AND salesorder.sid = {$soId}";
            $sth1 = $db->query($sql1);
        } catch (PDOException $f) {
            echo $f->getMessage();
        }
        echo "<script type='text/javascript'>
        alert('ORDER FULFILLED !!!');
        window.location.replace('pendingorders.php');
        </script>";
        return;
    }
}

try {
    $sql4 = "UPDATE stocklevel
            SET stocklevel.level = 'STOCK LEVEL ... OK !!!'
                WHERE stocklevel.stockbalance > 49";
    $sth4 = $db->query($sql4);
} catch (PDOException $h) {
    echo $h->getMessage();
}

try {
$sql5 = "UPDATE stocklevel
        SET stocklevel.level = 'STOCK LEVEL LOW... RESTOCK !!!'
            WHERE stocklevel.stockbalance < 50";
$sth5 = $db->query($sql5);
} catch (PDOException $h) {
    echo $h->getMessage();
}
//header("Location: pendingorders.php");
?>