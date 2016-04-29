<?php
include('connection.php');
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['salesid'])) {
    $soId = $_GET['salesid'];
    $sqlselect = "SELECT * FROM salesorder WHERE sid = $soId";
    $getResult = mysqli_query($db, $sqlselect);
//To select the Order
    $stockbalance = $db->query("SELECT stocklevel.stockbalance
                FROM stocklevel, salesitem, salesorder
                WHERE stocklevel.productid = salesitem.productid
                AND salesitem.sid = salesorder.sid
                AND salesorder.sid = {$soId}");
    $stockbalance->setFetchMode(PDO::FETCH_ASSOC);
    $stockbalance->fetchAll()[0]['stockbalance'];


    $stockordered = $db->query("SELECT quantity
                FROM salesitem
                WHERE sid = {$soId}");
    $stockordered->setFetchMode(PDO::FETCH_ASSOC);
    $stockordered->fetchAll()[0]['quantity'];
    //End

//To check if Order is pending Delivery
    $purchasepend = $db->query("SELECT purchaseitem.productid
                    FROM purchaseitem, purchaseorder
                    WHERE purchaseorder.purchaseid = purchaseitem.purchaseid
                    AND purchaseorder.status = 'pending'");
    $purchasepend->setFetchMode(PDO::FETCH_ASSOC);
    $purchasepend->fetchAll()[0]['productid'];

    $salespend = $db->query("SELECT salesitem.productid
                            FROM salesitem, salesorder
                            WHERE salesorder.sid = salesitem.sid
                            AND salesorder.status = 'pending'
                            AND salesorder.sid = {$soId}");
    $salespend->setFetchMode(PDO::FETCH_ASSOC);
    $salespend->fetchAll()[0]['productid'];
// End
    /*if ($stockordered > $stockbalance) {
    echo "<script type='text/javascript'>
        alert('CANNOT FULFIL ORDER BECAUSE STOCK LEVEL TOO LOW !!!');
       window.location.replace('pendingorders.php');
          </script>";
    return false;
        if ($purchasepend == $salespend) {
            echo "<script type='text/javascript'>
        alert('PRODUCT ORDERED IS PENDING FULFILLMENT FROM SUPPLIER !!!');
       window.location.replace('pendingorders.php');
          </script>";
            return false;
        } else return false;
    } else*/
    if ($stockordered <= $stockbalance) {
    try {
        $sql = "UPDATE salesorder
            SET status = 'fulfilled'
                WHERE sid = {$soId}";
        $sth = $db->query($sql);
        echo "<script type='text/javascript'>
        alert(' SALES ORDER FULFILLED !!!');
        window.location.replace('pendingorders.php');
          </script>";
        return true;
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
}

try {
$sql4 = "UPDATE stocklevel
            SET stocklevel.level = 'STOCK LEVEL ... OK !!!'
                WHERE stocklevel.stockbalance > 49";
$sth4 = $db->query($sql4);
} catch (PDOException $h) {
echo $h->getMessage();
}
header("Location: pendingorders.php");
?>