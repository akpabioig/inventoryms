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
                    <td> PRODUCT HELP</td>
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
                                src="https://www.youtube.com/embed/?">
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
<script>
    var modal17 = document.getElementById('myModal17');

    // Get the button that opens the modal
    var btn17 = document.getElementById("y2");

    // Get the <span> element that closes the modal
    var span17 = document.getElementsByClassName("close17")[0];

    // When the user clicks on the button, open the modal
    btn17.onclick = function () {
        modal17.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span17.onclick = function () {
        modal17.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal17.onclick = function (event17) {
        if (event17.target == modal17) {
            modal17.style.display = "none";
        }
    }
</script>
</body>
</html>