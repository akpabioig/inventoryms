<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title> LOCATION </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script type = "text/javascript" src="scripting.js"></script>

    <!-- modal -->
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
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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
        .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
    color: #000;
    text-decoration: none;
            cursor: pointer;
        }
    </style>

    <!-- end modal -->

    <!--<script>
        var a1 = 'WH Location A1';
        var a2 = 'WH Loc A2';
        var a3 = 'WH Loc A3';
        var a4 = 'WH Loc A4';
        var b1 = 'WH Loc B1';
        var b2 = 'WH Loc B2';
        var b3 = 'WH Loc B3';
        var b4 = 'WH Loc B4';
        var c1 = 'WH Loc C1';
        var c2 = 'WH Loc C2';
        var c3 = 'WH Loc C3';
        var c4 = 'WH Loc C4';
        var d1 = 'WH Loc D1';
        var d2 = 'WH Loc D2';
        var d3 = 'WH Loc D3';
        var d4 = 'WH Loc D4';
        var y1 = 'Yard 1';
        var y2 = 'Yard 2';
    </script>-->

    <script>
        function pass(n){

            switch (n){
                case 'a':
                    // Get the modal
                    var modal = document.getElementById('myModal');

                    // Get the button that opens the modal
                    //var btn = document.getElementById('a');

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal
                    a.onclick = function() {
                        modal.style.display = "block";
                        <?php $a1 = "WH Location A1"; ?>


                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }


                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    break;

                case 'b':
                    // Get the modal
                    var modal = document.getElementById('myModal');

                    // Get the button that opens the modal
                    //var btn = document.getElementById('a');

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal
                    b.onclick = function() {
                        modal.style.display = "block";
                        var a2 = "WH Location A2";
                        <?php $a1 = (a2); ?>
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }


                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }

                    break;
            }
            /*
            if(n === 'a'){
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the button that opens the modal
                //var btn = document.getElementById('a');

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                a.onclick = function() {
                    modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                    <?php //$a1 = 'WH Location A1';?>
                }


                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }else if(n === 'b'){
                // Get the modal
                var modal = document.getElementById('myModal');

                // Get the button that opens the modal
                //var btn = document.getElementById('a');

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                b.onclick = function() {
                    modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                    <?php //$a1 = 'WH Location B4';?>
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }*/
        }

    </script>
</head>
<body>
<nav class="w3-sidenav w3-black" style="width:102px">
    <a class="w3-padding-16" href="homepage.php"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
    <a class="w3-padding-16" href="#"><i class="fa fa-search w3-xlarge"></i> <br>SEARCH</a>
    <a class="w3-padding-16" href="addproduct.php"><i class="fa fa-plus-square w3-xlarge"></i> <br>ADD PRODUCT</a>
    <a class="w3-padding-16" href="addcustomer.php"><i class="fa fa-users w3-xlarge"></i> <br>ADD CUSTOMER</a>
    <a class="w3-padding-16" href="newsales.php"><i class="fa fa-dollar w3-xlarge"></i><br>SALES ORDER</a>
    <a class="w3-padding-16" href="newpurchase.php"><i class="fa fa-shopping-cart w3-xlarge"></i>PURCHASE ORDER</a>
    <a class="w3-padding-16" href="addvendor.php"><i class="fa fa-truck w3-xlarge"></i><br>ADD SUPPLIER</a>
    <a class="w3-padding-16" href="location.php"><i class="fa fa-map-marker w3-xlarge"></i><br>LOCATION</a>
</nav>
<div style="margin-left:70px">
    <header>
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
        <a id="logout" href="logout.php"><input type = "button" value = "LOG OUT"/></a>
    </header>
    <section>
        <h3>PRODUCT LOCATION </h3>
        <img src= "images/loc.png" style{height="250" width="200"}/>
        <h2>WareHouse / Yards </h2>
        <p>Select The Location within the Warehouse or Yard you would like to explore its' contents</p>
        <div class = "locbutt">
            <a id="a" onclick="return pass('a');">
                <img src= "location/a1.jpeg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="b" onclick="return pass('b');">
                <img src= "location/a2.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="a3" href= "#">
                <img src= "location/a3.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="a4" href= "#">
                <img src= "location/a4.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
        </div>
        <div class = "locbutt2">
            <a id="b1" href= "#">
                <img src= "location/b1.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="b2" href= "#">
                <img src= "location/b2.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="b3" href= "#">
                <img src= "location/b3.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="b4" href= "#">
                <img src= "location/b4.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
        </div>
        <div class = "locbutt3">
            <a id="c1" href= "#">
                <img src= "location/c1.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="c2" href= "#">
                <img src= "location/c2.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="c3" href= "#">
                <img src= "location/c3.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="c4" href= "#">
                <img src= "location/c4.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
        </div>
        <div class = "locbutt2">
            <a id="d1" href= "#">
                <img src= "location/d1.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="d2" href= "#">
                <img src= "location/d2.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="d3" href= "#">
                <img src= "location/d3.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="d4" href= "#">
                <img src= "location/d4.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
        </div>
        <div class = "locbutt3">
            <a id="y1" href= "#">
                <img src= "location/y1.jpg" style{height="150" width="370"} class ="locicons"/>
            </a>
            <a id="y2" href= "#">
                <img src= "location/y2.jpg" style{height="150" width="370"} class ="locicons"/>
            </a>
            </div>

            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">×</span>
                    <table>
                    <tr>
                        <th> Product ID </th>
                        <th>Product Serial Number </th>
                        <th>Product Name</th>
                        <th>Product Description </th>
                        <th>Initial Stock Price</th>
                        <th>Wholesale Price</th>
                        <th>Retail Price</th>
                    </tr>
                        <?php

                        /*
                         * $sql= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location A1'";
                         *
                         *
                         */
                        $sql= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location A1'"; //get Js
                        $result = mysqli_query($db, $sql);
                        if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                            while($row = $result -> fetch_array()){
                                echo "

                                <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row['productid']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row['productserialnumber']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row['productname']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row['productdescription']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row['initialstockprice']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row['wholesaleprice']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row['retailprice']}\" class = \"tablefield\"></td>
                    </tr>

                                ";
                            }
                        }else{
                            echo '<option> No Result Found </option>';
                        }
                        ?>

                    </table>
                </div>

            </div>

    </section>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>