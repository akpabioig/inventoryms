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
    <title>REPORTS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="scripting.js"></script>
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
        <h3>Inventory Management Reports</h3>
        <img src= "images/reports.jpg" style{height="250" width="200"}/>
        <h2>REPORTS</h2>
        <p>Click on Any of The Reports To Explore</p>
        <div id = "form1">
            <div>
                <a href="allcustomers.php">
                    <img src="report/c_report.jpg" style{height="130" width="200" } class="reporticons"/>
                </a>
                <a href="allsuppliers.php">
                    <img src="report/s_report.jpg" style{height="130" width="200" } class="reporticons"/>
                </a>
                <a href="allproducts.php">
                    <img src="report/p_report.jpg" style{height="130" width="200" } class="reporticons"/>
                </a>
                <a href="alllocation.php">
                    <img src="report/pl_report.jpg" style{height="150" width="200" } class="reporticons"/>
                </a>
            </div>
            <div>
                <a href="allpurchase.php">
                    <img src="report/po_report.jpg" style{height="130" width="200" } class="reporticons"/>
                </a>
                <a href="allsales.php">
                    <img src="report/so_report.jpg" style{height="130" width="200" } class="reporticons"/>
                </a>
                <a href="stocklevel.php">
                    <img src="report/sl_report.jpg" style{height="130" width="200" } class="reporticons"/>
                </a>
            </div>
        </div>
    </section>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
