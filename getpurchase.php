<?php

include('connection.php');
$product_id = $_POST['search'];

$sql = "SELECT locationid, initialstockprice FROM addproduct
        WHERE productid = $product_id";
$record = mysqli_query($db, $sql);

while ($row = $record->fetch_array()) {
    echo $row['locationid'];
    echo $row['initialstockprice'];
}
?>