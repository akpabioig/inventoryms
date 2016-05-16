<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}else {

    include('connection.php');

    $query = "SELECT COUNT(salesorder.sid)
                        FROM salesorder";
    $result1 = mysqli_query($db, $query);

    echo $result1;
}
?>