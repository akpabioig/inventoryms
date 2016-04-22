<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> ADMIN LOGIN PAGE </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>
<body>
<div style="margin-left:70px">
    <header id="headlogin">
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
        <button id="logout"><a href="logout.php">LOG-OUT</a></button>
    </header>
    <section id="admincontent">
        <h3> ADMIN HOMEPAGE </h3>
        <img src="images/adminuser.png" style{height="250" width="200" }/>
        <h3>CLICK ON CREATE USER TO CREATE NEW USER</h3>
        <h3>CLICK ON APPLICATION TO GO TO THE APPLICATION HOMEPAGE</h3>
        <div id="form1">
            <div class="buttons3">
                <a id="newuser" href="createuser.php">
                    <img src="images/createuser.png" style{height="270" width="250" }/>
                    <span id="createuser">CREATE USER </span>
                </a>
                <a id="app" href="homepage.php">
                    <img src="images/application.png" style{height="270" width="250" }/>
                    <span id="application">ENTER APPLICATION </span>
                </a>
                <a id="users" href="userdetails.php">
                    <img src="images/usersdetails.jpg" style{height="270" width="250" }/>
                    <span id="userslog">APP USER DETAILS </span>
                </a>
            </div>
        </div>
    </section>
</div>
<footer id="footlogin">
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
