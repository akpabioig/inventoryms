<?php

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$user = $_POST['user'];
$pass = $_POST['pass'];

function SignIn()
{
    session_start();
    if (!empty($_POST['user']))
    {
        $query = mysql_query("SELECT * FROM login where username = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
        $row = mysql_fetch_array($query) or die(mysql_error());
        if(!empty($row['username']) AND !empty($row['password']))
        {
            $_SESSION['username'] = $row['password']; echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
        }
        else { echo "PLEASE ENTER THE CORRECT ID AND PASSWORD";
        }

    }
}
if(isset($_POST['submit']))
{
    SignIn();
}
?>