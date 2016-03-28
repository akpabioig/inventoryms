<?php
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

echo $title = htmlspecialchars($_POST['title']); echo "<br>";
echo $firstname = htmlspecialchars($_POST['firstname']); echo "<br>";
echo $middlename = htmlspecialchars($_POST['middlename']); echo "<br>";
echo $lastname = htmlspecialchars($_POST['lastname']); echo "<br>";
echo $position = htmlspecialchars($_POST['position']); echo "<br>";
echo $uid = htmlspecialchars($_POST['uid']);

echo $username = htmlspecialchars($_POST['username']); echo "<br>";
echo $password = htmlspecialchars($_POST['password']); echo "<br>";

/*
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
}*/
?>
