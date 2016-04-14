<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 19/03/2016
 * Time: 13:44
 */

include('connection.php');

$rq = $_POST['myvariant'];
$sql = "SELECT * FROM addproduct WHERE productname ='{$rq}'";
$result = mysqli_query($db, $sql);
echo $result['productid'];
?>
