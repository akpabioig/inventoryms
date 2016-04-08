<?php include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title> HOME PAGE </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script type = "text/javascript" src="scripting.js"></script>
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
        <a id="logout" href="logout.php"><input type = "button" value = "LOG OUT"/></a>
    </header>
    <section>
        <nav id = "nav2">
            <ul>
                <li><h3>SHORTCUTS</h3></li>
                <li>
                    <a href=""><img src="images/dash.gif" style{height="50" width="50"}/>    Dashboard</a>
                </li>
                <li>
                    <a href="reports.php"><img src="images/reports.jpg" style{height="50" width="50"}/>    Reports</a>
                </li>
                <li>
                    <a href=""><img src="images/help.png" style{height="50" width="50"}/>    Help</a>
                </li>
            </ul>
        </nav>
        <div class = "buttons">
            <a id="prod" href= "addproduct.php">
                <img src= "images/product.png" style{height="250" width="185"}/>
                <span id="aprod">ADD PRODUCT</span>
            </a>
            <a id="cust" href= "addcustomer.php">
                <img src= "images/cust.png" style{height="250" width="185"}/>
                <span id="customer">ADD CUSTOMER</span>
            </a>
            <a id="sord" href= "newsales.php">
                <img src= "images/sales.jpg" style{height="250" width="185"}/>
                <span id="sorder">SALES ORDER</span>
            </a>
        </div>
        <div class = "buttons2">
            <a id="pur" href= "newpurchase.php">
                <img src= "images/pur.png" style{height="250" width="200"}/>
                <span id="porder">PURCHASE ORDER</span>
            </a>
            <a id= "supp" href= "addsupplier.php">
                <img src= "images/supp.png" style{height="250" width="200"}/>
                <span id="asupp">ADD SUPPLIER</span>
            </a>
            <a id="loc" href= "location.php">
                <img src= "images/loc.png"style{height="250" width="200"}/>
                <span id="floc">PRODUCT LOCATION</span>
            </a>
        </div>
        <div class = "buttons">
            <a id="edit" href= "newpurchase.php">
                <img src= "images/edit.png" style{height="250" width="200"}/>
                <span id="editorder">EDIT RECORDS</span>
            </a>
        </div>
    </section>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>