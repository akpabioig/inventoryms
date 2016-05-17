<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 17/05/2016
 * Time: 01:23
 */

include('connection.php');
$product_id = $_POST['search'];

$sql = "SELECT COUNT(locationid), locationid
        from addproduct
        GROUP BY locationid;";
$record = mysqli_query($db, $sql);

while ($row = $record->fetch_array()) {
    echo "{$row[0]} {$row[1]} \n";
}
?>