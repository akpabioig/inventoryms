<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 19/05/2016
 * Time: 22:35
 */

include('connection.php');
$list = array();
$query1 = "select * from dashboard_totals";
$result1 = mysqli_query($db, $query1);
while($count1 = $result1->fetch_array()) {
    echo "$count1[0] \n";

}
?>