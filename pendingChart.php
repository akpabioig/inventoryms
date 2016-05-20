<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 20/05/2016
 * Time: 00:32
 */

include('connection.php');

$sql = "SELECT count(sid) from salesorder where status = 'pending'
        UNION ALL
        SELECT count(purchaseid) from purchaseorder where status = 'pending';";
$record = mysqli_query($db, $sql);

//get
while ($row = $record->fetch_array()) {
    echo "{$row[0]} \n";
}
?>