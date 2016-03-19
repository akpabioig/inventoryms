<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 19/03/2016
 * Time: 13:44
 */

include('connection.php');

$sql = "SELECT locationid, retailprice FROM addproduct WHERE productname = '$productname'";
$record = mysqli_query($db, $sql);

?>