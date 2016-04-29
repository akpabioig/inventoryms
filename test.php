<?php

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
if ($stockordered > $stockbalance) {
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
} else if ($stockordered <= $stockbalance) {

}
?>


exit;
