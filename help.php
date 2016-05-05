<?php
/*session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}*/

include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title> HELP </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <a class="w3-padding-16" href="homepage.php"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
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
        <button id="logout"><a href="logout.php">LOG-OUT</a></button>
    </header>
    <section>
        <img src="images/help.png" id="helpicon" style{height="250" width="200" }/>
        <iframe id=intro width="500" height="320" allowfullscreen="allowfullscreen"
                src="https://www.youtube.com/embed/hmQQ9PGXzW8?autoplay=1">
        </iframe>
        <nav id="direct">
            <h2>WELCOME TO THE HELP PAGE OF THE RGU IMS</h2>
            <h3>PLAY ANY OF VIDEOS TO WATCH THE HELP WITH VOICE OVER</h3>
            <h3> IF THE VIDEOS BECOME TOO BORING YOU MAY CLICK ON THE HEADER OF THE VIDEO TO SEE FAQ's</h3>
        </nav>
        <div id="form4">
            <table>
                <tr>
                    <td id="producthelp"> PRODUCT HELP</td>
                    <td> CUSTOMER HELP</td>
                    <td> SUPPLIER HELP</td>
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
            <p> - The Product report can be found in the reports section of the system.
                The report icon is on the shortcut pane located at the top right of the application's homepage</p>
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

</script>
</body>
</html>