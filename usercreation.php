<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$title = htmlspecialchars($_POST['title']);
$firstname = htmlspecialchars($_POST['firstname']);
$middlename = htmlspecialchars($_POST['middlename']);
$lastname = htmlspecialchars($_POST['lastname']);
$position = htmlspecialchars($_POST['position']);
$uid = htmlspecialchars($_POST['uid']);

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);


try {
    $sql = "INSERT INTO login (username, password)
VALUES ('$username', '$password')";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

try {
$sql = "INSERT INTO user (userid, title,firstname, lastname, middlename, lastname, staffposition)
VALUES ($uid, '$title', '$firstname','$middlename', '$lastname', '$position')";
$sth = $db->query($sql);
} catch(PDOException $e) {
echo $e->getMessage();
}
?>
