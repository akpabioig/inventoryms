<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}else {

    include('connection.php');

    $query = "SELECT COUNT(salesorder.sid)
                        FROM salesorder";
    $result1 = mysqli_query($db, $query);

    while($count = $result1->fetch_array()){
        echo $count[0];
    }
}
?>