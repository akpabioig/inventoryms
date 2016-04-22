<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$title = htmlspecialchars($_POST['title']);
$firstname = htmlspecialchars($_POST['firstname']);
$middlename = htmlspecialchars($_POST['middlename']);
$lastname = htmlspecialchars($_POST['lastname']);
$position = htmlspecialchars($_POST['position']);

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$uid = htmlspecialchars($_POST['uid']);
try {
    $sql = "UPDATE user
                SET title = '{$title}',
                    firstname = '{$firstname}',
                    middlename = '{$middlename}',
                    lastname = '{$lastname}',
                    staffposition = '{$staffposition}',
                    WHERE userid = {$uid}";
    $sth = $db->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
}
try {
    $sql = "UPDATE login
                SET username = '{$username}',
                    password = '{$password}',
                    WHERE userid = {$uid}";
    $sth = $db->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
}
//header("Location: edit-user.php");
?>