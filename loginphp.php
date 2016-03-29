<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    $myusername = htmlspecialchars($_POST['myusername']);
    $mypassword = htmlspecialchars($_POST['mypassword']);

    try {
        $sql = "SELECT * FROM login WHERE username = '$myusername' AND password = '$mypassword' LIMIT 1";
        $sth = $db->query($sql);

        if($sth ->rowCount() == 1) {
            header("Location: login_success.php");
        }else {
            header("Location: login.php?failed=1");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();

    }

?>