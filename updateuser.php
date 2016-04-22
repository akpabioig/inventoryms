<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

echo $title = htmlspecialchars($_POST['title']);
echo "<br>";
echo $firstname = htmlspecialchars($_POST['firstname']);
echo "<br>";
echo $middlename = htmlspecialchars($_POST['middlename']);
echo "<br>";
echo $lastname = htmlspecialchars($_POST['lastname']);
echo "<br>";
echo $position = htmlspecialchars($_POST['position']);
echo "<br>";

echo $username = htmlspecialchars($_POST['username']);
echo "<br>";
echo $password = htmlspecialchars($_POST['password']);
echo "<br>";
echo $uid = htmlspecialchars($_POST['uid']);
echo "<br>";
/*try {
    $sql = "UPDATE user
                SET title = '{$title}',
                    firstname = '{$firstname}',
                    middlename = '{$middlename}',
                    lastname = '{$lastname}',
                    staffposition = '{$staffposition}',
                    WHERE userid = {$userId}";
    $sth = $db->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
}

try {
    $sql = "UPDATE login
                SET username = '{$username}',
                    password = '{$password}',
                    WHERE userid = {$userId}";
    $sth = $db->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
}
header("Location: edit-user.php");*/
?>