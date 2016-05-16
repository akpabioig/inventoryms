<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    include('connection.php');
    $db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $result1 = $db->query("SELECT COUNT(salesorder.sid)
                        FROM salesorder");
    $result1->setFetchMode(PDO::FETCH_ASSOC);
    $salesnum = $result1->fetchAll()[0]['sid'];
    echo 'hi';
}

?>