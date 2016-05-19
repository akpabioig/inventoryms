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
    <title> HELP </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="scripting.js"></script>
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close, .close1, .close2, .close3, .close4,
        .close5, .close6, .close7, .close8 {
            float: right;
            font-size: 30px;
            font-weight: bold;
            color: red;
        }

        .close, .close1, .close2, .close3, .close4,
        .close5, .close6, .close7, .close8 :hover,
        .close, .close1, .close2, .close3, .close4,
        .close5, .close6, .close7, .close8 :focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
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
        <img src="images/help.png" id="helpicon" style{height="250" width="200" }/>
        <iframe id=intro width="500" height="320" allowfullscreen="allowfullscreen"
                src="https://www.youtube.com/embed/hmQQ9PGXzW8?autoplay=1">
        </iframe>
        <nav id="direct">
            <h1> WELCOME TO THE HELP PAGE OF THE RGU IMS</h1>
            <h2> PLAY ANY OF THE VIDEOS TO WATCH THE HELP WITH VOICE OVER</h2>
            <h3> IF THE VIDEOS BECOME TOO BORING YOU MAY </h3>
            <h3> CLICK ON THE HEADER OF THE VIDEO TO SEE FREQUENTLY ASKED QUESTIONS (FAQ's)</h3>
        </nav>
        <div id="form4">
            <table cellpadding="10" cellspacing="10">
                <tr>
                    <td id="producthelp"> PRODUCT HELP</td>
                    <td id="customerhelp"> CUSTOMER HELP</td>
                    <td id="supplierhelp"> SUPPLIER HELP</td>
                </tr>
                <tr>
                    <td>
                        <iframe id=intro width="350" height="300" allowfullscreen="allowfullscreen"
                                src="https://www.youtube.com/embed/oUbrjlYF1Vw?">
                        </iframe>
                    </td>
                    <td>
                        <iframe id=intro width="350" height="300" allowfullscreen="allowfullscreen"
                                src="https://www.youtube.com/embed/q7iig4ygcCM?">
                        </iframe>
                    </td>
                    <td>
                        <iframe id=intro width="350" height="300" allowfullscreen="allowfullscreen"
                                src="https://www.youtube.com/embed/bH7vvv1ct84?">
                        </iframe>
                    </td>
                </tr>
                <tr>
                    <td id="purchaseorderhelp"> PURCHASE ORDER HELP</td>
                    <td id="salesorderhelp"> SALES ORDER HELP</td>
                </tr>
                <tr>
                    <td>
                        <iframe id=intro width="350" height="300" allowfullscreen="allowfullscreen"
                                src="https://www.youtube.com/embed/MFxpnuNSedQ?">
                        </iframe>
                    </td>
                    <td>
                        <iframe id=intro width="350" height="300" allowfullscreen="allowfullscreen"
                                src="https://www.youtube.com/embed/tePJ77mhnCI?">
                        </iframe>
                    </td>
                </tr>
            </table>
        </div>
    </section>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">x</span>
        <header>
            <h1> PRODUCT HELP FAQ's</h1>
        </header>
        <body>
        <ol>
            <li> What is Initial Stock Price ?</li>
            <p> - Initial Stock Price is the price at which the product is to be bought from the supplier</p>
            <li> How to get the product Report ?</li>
            <p> - The Product report can be found in the reports section of the application.
                The report icon is on the shortcut pane located at the top right of the application's homepage</p>
            <li>
            <li> How to change Storage location?</li>
            <p> - Access the edit records page using the edit records icon on the homepage,
                Go to Edit product Records, Scroll to the end of the record to be edit and click the edit icon
                Change the location using the drop down menu and click update
            <p>
            <li> How to access product location</li>
            <p> - Click on the Reports icons on the homepage. Go to the Product Location Report and View the
                location</p>
            <li> How to check products in a particular location</li>
            <p> - Click on the product location icon on the homepage, Click on teh particular location to explore. </p>
        </ol>
        </body>
    </div>
</div>
<div id="myModal1" class="modal">
    <div class="modal-content">
        <span class="close1">x</span>
        <header>
            <h1> CUSTOMER HELP FAQ's </h1>
        </header>
        <body>
        <ol>
            <li> Must Customer be added before sales can be made ?</li>
            <p> - Yes, Customer must be added before sales can be made. </p>
            <li> How to edit customer record</li>
            <p> - Go to the edit records page using the edit records icon on the homepage
                Click on the edit customer record. Scroll to the end of the record to be edit and click the edit
                icon</p>
        </ol>
        </body>
    </div>
</div>
<div id="myModal2" class="modal">
    <div class="modal-content">
        <span class="close2">x</span>
        <header>
            <h1> SUPPLIER HELP FAQ's </h1>
        </header>
        <body>
        <ol>
            <li> Must Supplier be added before purchase can be made ?</li>
            <p> - Yes, Supplier must be added before purchases can be made. </p>
            <li> How to edit supplier record</li>
            <p> - Go to the edit records page using the edit records icon on the homepage
                Click on the edit supplier record. Scroll to the end of the record to be edit and click the edit
                icon</p>
        </ol>
        </body>
    </div>
</div>
<div id="myModal3" class="modal">
    <div class="modal-content">
        <span class="close3">x</span>
        <header>
            <h1> PURCHASE ORDER FAQ's </h1>
        </header>
        <body>
        <ol>
            <li> What are the compulsory fields to complete a purchase ?</li>
            <p> - Select date, Select product and set tax.</p>
            <li> How are purchases fulfilled ?</li>
            <p> - Go to the order fulfillment tab on the homepage and select the order to be fulfilled from the table,
                Scroll to the end and click on the fulfill button</p>
            <li> Is there a limit to quantity that can be purchased at a given time ?</li>
            <p> - No.</p>
            <li> How to delete an order if an error occurs ?</li>
            <p> - Click on delete at the end of the row.</p>
        </ol>
        </body>
    </div>
</div>
<div id="myModal4" class="modal">
    <div class="modal-content">
        <span class="close4">x</span>
        <header>
            <h1> SALES ORDER FAQ's </h1>
        </header>
        <body>
        <ol>
            <li> What are the compulsory fields to complete a sales ?</li>
            <p> - Select date, Select product, discount and set tax.</p>
            <li> How are sales fulfilled ?</li>
            <p> - Go to the order fulfillment tab on the homepage and select the order to be fulfilled from the table,
                Scroll to the end and click on the fulfill button</p>
            <li> If the order is more than what is in stock, Does the order still go through ?</li>
            <p> - No. It tells you to purchase stock because stock level too low. </p>
            <li> How to delete an order if an error occurs ?</li>
            <p> - Click on delete at the end of the row.</p>
            <li> Can a product that is low in stock but pending fulfillment in purchase order be ordered again ?</li>
            <p> Yes. It can but on fulfillment of the order, If the order is low the system prompt user that it is low
                but is being ordered from supplier. Therefore user shouldnt restock. </p>
        </ol>
        </body>
    </div>
</div>
<script>
    // PRODUCT HELP
    var modal = document.getElementById('myModal');
    var btn = document.getElementById("producthelp");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function () {
        modal.style.display = "block";
    }
    span.onclick = function () {
        modal.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

    var modal1 = document.getElementById('myModal1');
    var btn1 = document.getElementById("customerhelp");
    var span1 = document.getElementsByClassName("close1")[0];
    btn1.onclick = function () {
        modal1.style.display = "block";
    }
    span1.onclick = function () {
        modal1.style.display = "none";
    }
    modal1.onclick = function (event1) {
        if (event1.target == modal1) {
            modal1.style.display = "none";
        }
    }
    var modal2 = document.getElementById('myModal2');
    var btn2 = document.getElementById("supplierhelp");
    var span2 = document.getElementsByClassName("close2")[0];
    btn2.onclick = function () {
        modal2.style.display = "block";
    }
    span2.onclick = function () {
        modal2.style.display = "none";
    }
    modal2.onclick = function (event2) {
        if (event2.target == modal2) {
            modal2.style.display = "none";
        }
    }

    var modal3 = document.getElementById('myModal3');
    var btn3 = document.getElementById("purchaseorderhelp");
    var span3 = document.getElementsByClassName("close3")[0];
    btn3.onclick = function () {
        modal3.style.display = "block";
    }
    span3.onclick = function () {
        modal3.style.display = "none";
    }
    modal3.onclick = function (event3) {
        if (event3.target == modal3) {
            modal3.style.display = "none";
        }
    }
    var modal4 = document.getElementById('myModal4');
    var btn4 = document.getElementById("salesorderhelp");
    var span4 = document.getElementsByClassName("close4")[0];
    btn4.onclick = function () {
        modal4.style.display = "block";
    }
    span4.onclick = function () {
        modal4.style.display = "none";
    }
    modal4.onclick = function (event4) {
        if (event4.target == modal4) {
            modal4.style.display = "none";
        }
    }
</script>
</body>
</html>