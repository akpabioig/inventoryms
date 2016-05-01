<?php
function debugAlert($var)
{
    echo '<script type="text/javascript">';
    echo 'alert("' . $var . '")';
    echo '</script>';
}

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
    echo $stockbalance->fetchAll()[0]['stockbalance'];
    echo "<br>";

    $stockordered = $db->query("SELECT quantity
                FROM salesitem
                WHERE sid = {$soId}");
    $stockordered->setFetchMode(PDO::FETCH_ASSOC);
    echo $stockordered->fetchAll()[0]['quantity'];
    echo "<br>";

    if (($stockordered->fetchAll()[0]['quantity']) > ($stockbalance->fetchAll()[0]['stockbalance'])) {
        echo
        "a bigger than b";
    } else
        echo "b bigger than a ";
}
/*
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
debugAlert("Order Fulfilled");
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
header("Location: pendingorders.php");*/
?>