<?php
include('connection.php');
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['salesid'])) {
    $soId = $_GET['salesid'];
    $sqlselect = "SELECT * FROM salesorder WHERE sid = $soId";
    $getResult = mysqli_query($db, $sqlselect);

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

    if ($stockbalance < $stockordered) {
        echo '<script language="javascript">';
        echo 'alert("Cant SOmhsjbhskb")';
        echo '</script>';
        window . location . replace('pendingorders.php');
        return false;
    }

    if ($stockbalance > $stockordered) {
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
        echo '<script language="javascript">';
        echo 'alert("dfhdhhfdf SOmhsjbhskb")';
        echo '</script>';
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