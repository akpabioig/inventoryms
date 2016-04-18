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
    <meta charset="UTF-8">
    <title> EDIT RECORDS </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="scripting.js"></script>
</head>
<body>
<nav class="w3-sidenav w3-black" style="width:102px">
    <a class="w3-padding-16" href="homepage.php"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
    <a class="w3-padding-16" href="#"><i class="fa fa-search w3-xlarge"></i> <br>SEARCH</a>
    <a class="w3-padding-16" href="addproduct.php"><i class="fa fa-plus-square w3-xlarge"></i> <br>ADD PRODUCT</a>
    <a class="w3-padding-16" href="addcustomer.php"><i class="fa fa-users w3-xlarge"></i> <br>ADD CUSTOMER</a>
    <a class="w3-padding-16" href="newsales.php"><i class="fa fa-dollar w3-xlarge"></i><br>SALES ORDER</a>
    <a class="w3-padding-16" href="newpurchase.php"><i class="fa fa-shopping-cart w3-xlarge"></i>PURCHASE ORDER</a>
    <a class="w3-padding-16" href="addsupplier.php"><i class="fa fa-truck w3-xlarge"></i><br>ADD SUPPLIER</a>
    <a class="w3-padding-16" href="location.php"><i class="fa fa-map-marker w3-xlarge"></i><br>LOCATION</a>
</nav>
<div style="margin-left:70px">
    <header>
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
        <button id="logout" href="logout.php">LOG OUT</button>
    </header>
    <section>
        <h3> Edit Inventory Management Records </h3>
        <img src= "images/records.jpeg" style{height="250" width="200"}/>
        <h2> EDIT RECORDS </h2>
        <p> SELECT FROM THE LIST BELOW TO EDIT RECORDS </p>
        <div id = "form1">
        <ul>
            <li> <a href="productseditor.php"> EDIT PRODUCT RECORDS </a></li>
            <li> <a href="supplierseditor.php"> EDIT SUPPLIER RECORDS </a></li>
            <li> <a href="customerseditor.php"> EDIT CUSTOMER RECORDS </a></li>
        </ul>
        </div>
    </section>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
