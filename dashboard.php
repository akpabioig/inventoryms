<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
} else{
    include('connection.php');
    $list = array();
    $query1 = "select * from dashboard_totals";
    $result1 = mysqli_query($db, $query1);
    while($count1 = $result1->fetch_array()) {
    $list[] = $count1[0];
    }
    echo $list[0];
}

