<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['userid'])) {
    $userId = $_GET['userid'];

    try {
        $sql = "DELETE FROM login, user
                        WHERE userid = {$userId}";
        $sth = $db->query($sql);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("Location: userdetails.php");
} else {
    header("Location: userdetails.php");
}

?>