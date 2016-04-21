<?php
session_start();

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$adminusername = 'admin';
$adminpassword = 'admin';
/*$adminusername = htmlspecialchars($_POST['adminusername']);
$adminpassword = htmlspecialchars($_POST['adminpassword']);*/

try {
    $sql = "SELECT * FROM login
                WHERE username = '$adminusername'
                AND password = '$adminpassword' LIMIT 1";
    $sth = $db->query($sql);

    if ($sth->rowCount() == 1) {
        $_SESSION['user'] = $adminusername;
        header("Location: adminlogin_success.php?s=1");
    } else {
        header("Location: adminlogin.php?failed=1");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>