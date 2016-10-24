<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title> HOME PAGE </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script type = "text/javascript" src="scripting.js"></script>
</head>
<body>
<nav class="w3-sidenav w3-black" style="width:102px">
    <a class="w3-padding-16" href="index.php"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
    <a class="w3-padding-16" href="addproduct.php"><i class="fa fa-plus-square w3-xlarge"></i> <br>ADD PRODUCT</a>
    <a class="w3-padding-16" href="addcustomer.php"><i class="fa fa-users w3-xlarge"></i> <br>ADD CUSTOMER</a>
    <a class="w3-padding-16" href="addsupplier.php"><i class="fa fa-truck w3-xlarge"></i><br>ADD SUPPLIER</a>
    <a class="w3-padding-16" href="newsales.php"><i class="fa fa-dollar w3-xlarge"></i><br>SALES ORDER</a>
    <a class="w3-padding-16" href="newpurchase.php"><i class="fa fa-shopping-cart w3-xlarge"></i>PURCHASE ORDER</a>
    <a class="w3-padding-16" href="location.php"><i class="fa fa-map-marker w3-xlarge"></i><br>LOCATION</a>
</nav>
<div style="margin-left:70px">
    <header>
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
        <button id="logout"><a href="logout.php">LOG-OUT</a></button>
    </header>
    <section>
        <nav id = "nav2">
            <ul>
                <li><h3>SHORTCUTS</h3></li>
                <li>
                    <a href="dashboard.php"><img src="images/dash.gif" style{height="50" width="50" }/> Dashboard</a>
                </li>
                <li>
                    <a href="reports.php"><img src="images/reports.jpg" style{height="50" width="50"}/>    Reports</a>
                </li>
                <li>
                    <a href="help.php"><img src="images/help.png" style{height="50" width="50" }/> Help</a>
                </li>
            </ul>
        </nav>
        <div class = "buttons">
            <a id="prod" href= "addproduct.php">
                <img src="images/product.png" style{height="270" width="200" }/>
                <span id="aprod">ADD PRODUCT</span>
            </a>
            <a id="cust" href= "addcustomer.php">
                <img src="images/cust.png" style{height="270" width="200" }/>
                <span id="customer">ADD CUSTOMER</span>
            </a>
            <a id="sord" href= "newsales.php">
                <img src="images/sales.jpg" style{height="270" width="200" }/>
                <span id="sorder">SALES ORDER</span>
            </a>
        </div>
        <div class = "buttons2">
            <a id="pur" href= "newpurchase.php">
                <img src="images/pur.png" style{height="270" width="200" }/>
                <span id="porder">PURCHASE ORDER</span>
            </a>
            <a id= "supp" href= "addsupplier.php">
                <img src="images/supp.png" style{height="270" width="200" }/>
                <span id="asupp">ADD SUPPLIER</span>
            </a>
            <a id="loc" href= "location.php">
                <img src="images/loc.png" style{height="270" width="200" }/>
                <span id="floc">PRODUCT LOCATION</span>
            </a>
        </div>
        <div class = "buttons">
            <a id="edit" href= "editrecords.php">
                <img src="images/edit.png" style{height="270" width="200" }/>
                <span id="editorder">EDIT RECORDS</span>
            </a>
            <a id="orderfulfil" href="orderfulfilment.php">
                <img src="images/fulfil.png" style{height="270" width="200" }/>
                <span id="fulfil">ORDER FULFILMENT</span>
            </a>
        </div>
    </section>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>