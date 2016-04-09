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
    <script type = "application/javascript" src="scripting.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>


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
        .close, .close1, .close2, .close3, .close4,
        .close5, .close6, .close7, .close8, .close9,
        .close10, .close11, .close12, .close13, .close14,
        .close15, .close16, .close17{
            float: right;
            font-size: 30px;
            font-weight: bold;
            color: red;
        }

        .close, .close1, .close2, .close3, .close4,
        .close5, .close6, .close7, .close8, .close9,
        .close10, .close11, .close12, .close13, .close14,
        .close15, .close16, .close17 :hover,
        .close, .close1, .close2, .close3, .close4,
        .close5, .close6, .close7, .close8, .close9,
        .close10, .close11, .close12, .close13, .close14,
        .close15, .close16, .close17 :focus {
            color: #000;
             text-decoration: none;
            cursor: pointer;
        }
    </style>
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
            <a id="a1">
                <img src= "location/a1.jpeg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="a2">
                <img src= "location/a2.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="a3">
                <img src= "location/a3.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="a4">
                <img src= "location/a4.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
        </div>
        <div class = "locbutt2">
            <a id="b1">
                <img src= "location/b1.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="b2">
                <img src= "location/b2.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="b3">
                <img src= "location/b3.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="b4">
                <img src= "location/b4.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
        </div>
        <div class = "locbutt3">
            <a id="c1">
                <img src= "location/c1.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="c2">
                <img src= "location/c2.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="c3">
                <img src= "location/c3.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="c4">
                <img src= "location/c4.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
        </div>
        <div class = "locbutt2">
            <a id="d1">
                <img src= "location/d1.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="d2">
                <img src= "location/d2.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="d3">
                <img src= "location/d3.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
            <a id="d4">
                <img src= "location/d4.jpg" style{height="150" width="150"} class ="locicons"/>
            </a>
        </div>
        <div class = "locbutt3">
            <a id="y1">
                <img src= "location/y1.jpg" style{height="150" width="370"} class ="locicons"/>
            </a>
            <a id="y2">
                <img src= "location/y2.jpg" style{height="150" width="370"} class ="locicons"/>
            </a>
            </div>

                 <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">x</span>
                    <header>
                        <h1> Location : WareHouse Location A1</h1>
                    </header>
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

                       $sql= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location A1'"; //get Js
                           $result = mysqli_query($db, $sql);
                           if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                               while($row = $result -> fetch_array()){
                                   echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal1" class="modal">
            <div class="modal-content">
                <span class="close1">x</span>
                <header>
                <h1> Location : WareHouse Location A2</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location A2'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

            <div id="myModal2" class="modal">
                <div class="modal-content">
                    <span class="close2">x</span>
                    <header>
                        <h1> Location : WareHouse Location A3</h1>
                    </header>
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

                        $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location A3'"; //get Js
                        $result1 = mysqli_query($db, $sql1);
                        if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                            while($row1 = $result1 -> fetch_array()){
                                echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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


        <div id="myModal3" class="modal">
            <div class="modal-content">
                <span class="close3">x</span>
                <header>
                    <h1> Location : WareHouse Location A4</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location A4'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal4" class="modal">
            <div class="modal-content">
                <span class="close4">x</span>
                <header>
                    <h1> Location : WareHouse Location B1</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location B1'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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


        <div id="myModal5" class="modal">
            <div class="modal-content">
                <span class="close5">x</span>
                <header>
                    <h1> Location : WareHouse Location B2</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location B2'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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


        <div id="myModal6" class="modal">
            <div class="modal-content">
                <span class="close6">x</span>
                <header>
                    <h1> Location : WareHouse Location B3</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location B3'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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


        <div id="myModal7" class="modal">
            <div class="modal-content">
                <span class="close7">x</span>
                <header>
                    <h1> Location : WareHouse Location B4</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location B4'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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


        <div id="myModal8" class="modal">
            <div class="modal-content">
                <span class="close8">x</span>
                <header>
                    <h1> Location : WareHouse Location C1</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location C1'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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


        <div id="myModal9" class="modal">
            <div class="modal-content">
                <span class="close9">x</span>
                <header>
                    <h1> Location : WareHouse Location C2</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location C2'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal10" class="modal">
            <div class="modal-content">
                <span class="close10">x</span>
                <header>
                    <h1> Location : WareHouse Location C3</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location C3'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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


        <div id="myModal11" class="modal">
            <div class="modal-content">
                <span class="close11">x</span>
                <header>
                    <h1> Location : WareHouse Location C4</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location C4'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal12" class="modal">
            <div class="modal-content">
                <span class="close12">x</span>
                <header>
                    <h1> Location : WareHouse Location D1</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location D1'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal13" class="modal">
            <div class="modal-content">
                <span class="close13">x</span>
                <header>
                    <h1> Location : WareHouse Location D2</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location D2'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal14" class="modal">
            <div class="modal-content">
                <span class="close14">x</span>
                <header>
                    <h1> Location : WareHouse Location D3</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location D3'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal15" class="modal">
            <div class="modal-content">
                <span class="close15">x</span>
                <header>
                    <h1> Location : WareHouse Location D4</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location D4'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal16" class="modal">
            <div class="modal-content">
                <span class="close16">x</span>
                <header>
                    <h1> Location : Yard 1</h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'Yard 1'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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

        <div id="myModal17" class="modal">
            <div class="modal-content">
                <span class="close17">x</span>
                <header>
                    <h1> Location : Yard 2 </h1>
                </header>
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

                    $sql1= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'Yard 2'"; //get Js
                    $result1 = mysqli_query($db, $sql1);
                    if(mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) >1){

                        while($row1 = $result1 -> fetch_array()){
                            echo "

                        <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row1['productid']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row1['productserialnumber']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row1['productname']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row1['productdescription']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row1['initialstockprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row1['wholesaleprice']}\" class = \"tablefield1\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row1['retailprice']}\" class = \"tablefield1\" disabled></td>
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
<script>
    // WH LOCATION A1
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("a1");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
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



    // WH LOCATION A2
    var modal1 = document.getElementById('myModal1');

    // Get the button that opens the modal
    var btn1 = document.getElementById("a2");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];

    // When the user clicks on the button, open the modal
    btn1.onclick = function() {
        modal1.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal1.onclick = function(event1) {
        if (event1.target == modal1) {
            modal1.style.display = "none";
        }
    }

    // WH LOCATION A3
    var modal2 = document.getElementById('myModal2');

    // Get the button that opens the modal
    var btn2 = document.getElementById("a3");

    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close2")[0];

    // When the user clicks on the button, open the modal
    btn2.onclick = function() {
        modal2.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
        modal2.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal2.onclick = function(event2) {
        if (event2.target == modal2) {
            modal2.style.display = "none";
        }
    }

    // WH LOCATION A4
    var modal3 = document.getElementById('myModal3');

    // Get the button that opens the modal
    var btn3 = document.getElementById("a4");

    // Get the <span> element that closes the modal
    var span3 = document.getElementsByClassName("close3")[0];

    // When the user clicks on the button, open the modal
    btn3.onclick = function() {
        modal3.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() {
        modal3.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal3.onclick = function(event3) {
        if (event3.target == modal3) {
            modal3.style.display = "none";
        }
    }

    // WH LOCATION B1
    var modal4 = document.getElementById('myModal4');

    // Get the button that opens the modal
    var btn4 = document.getElementById("b1");

    // Get the <span> element that closes the modal
    var span4 = document.getElementsByClassName("close4")[0];

    // When the user clicks on the button, open the modal
    btn4.onclick = function() {
        modal4.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span4.onclick = function() {
        modal4.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal4.onclick = function(event4) {
        if (event4.target == modal4) {
            modal4.style.display = "none";
        }
    }

    // WH LOCATION B2
    var modal5 = document.getElementById('myModal5');

    // Get the button that opens the modal
    var btn5 = document.getElementById("b2");

    // Get the <span> element that closes the modal
    var span5 = document.getElementsByClassName("close5")[0];

    // When the user clicks on the button, open the modal
    btn5.onclick = function() {
        modal5.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span5.onclick = function() {
        modal5.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal5.onclick = function(event5) {
        if (event5.target == modal5) {
            modal5.style.display = "none";
        }
    }

    // WH LOCATION B3
    var modal6 = document.getElementById('myModal6');

    // Get the button that opens the modal
    var btn6 = document.getElementById("b3");

    // Get the <span> element that closes the modal
    var span6 = document.getElementsByClassName("close6")[0];

    // When the user clicks on the button, open the modal
    btn6.onclick = function() {
        modal6.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span6.onclick = function() {
        modal6.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal6.onclick = function(event6) {
        if (event6.target == modal6) {
            modal6.style.display = "none";
        }
    }

    // WH LOCATION B4
    var modal7 = document.getElementById('myModal7');

    // Get the button that opens the modal
    var btn7 = document.getElementById("b4");

    // Get the <span> element that closes the modal
    var span7 = document.getElementsByClassName("close7")[0];

    // When the user clicks on the button, open the modal
    btn7.onclick = function() {
        modal7.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span7.onclick = function() {
        modal7.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal7.onclick = function(event7) {
        if (event7.target == modal7) {
            modal7.style.display = "none";
        }
    }

    // WH LOCATION C1
    var modal8 = document.getElementById('myModal8');

    // Get the button that opens the modal
    var btn8 = document.getElementById("c1");

    // Get the <span> element that closes the modal
    var span8 = document.getElementsByClassName("close8")[0];

    // When the user clicks on the button, open the modal
    btn8.onclick = function() {
        modal8.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span8.onclick = function() {
        modal8.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal8.onclick = function(event8) {
        if (event8.target == modal8) {
            modal8.style.display = "none";
        }
    }

    // WH LOCATION C2
    var modal9 = document.getElementById('myModal9');

    // Get the button that opens the modal
    var btn9 = document.getElementById("c2");

    // Get the <span> element that closes the modal
    var span9 = document.getElementsByClassName("close9")[0];

    // When the user clicks on the button, open the modal
    btn9.onclick = function() {
        modal9.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span9.onclick = function() {
        modal9.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal9.onclick = function(event9) {
        if (event9.target == modal9) {
            modal9.style.display = "none";
        }
    }

    // WH LOCATION C3
    var modal10 = document.getElementById('myModal10');

    // Get the button that opens the modal
    var btn10 = document.getElementById("c3");

    // Get the <span> element that closes the modal
    var span10 = document.getElementsByClassName("close10")[0];

    // When the user clicks on the button, open the modal
    btn10.onclick = function() {
        modal10.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span10.onclick = function() {
        modal10.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal10.onclick = function(event10) {
        if (event10.target == modal10) {
            modal10.style.display = "none";
        }
    }

    // WH LOCATION C4
    var modal11 = document.getElementById('myModal11');

    // Get the button that opens the modal
    var btn11 = document.getElementById("c4");

    // Get the <span> element that closes the modal
    var span11 = document.getElementsByClassName("close11")[0];

    // When the user clicks on the button, open the modal
    btn11.onclick = function() {
        modal11.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span11.onclick = function() {
        modal11.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal11.onclick = function(event11) {
        if (event11.target == modal11) {
            modal11.style.display = "none";
        }
    }

    // WH LOCATION D1
    var modal12 = document.getElementById('myModal12');

    // Get the button that opens the modal
    var btn12 = document.getElementById("d1");

    // Get the <span> element that closes the modal
    var span12 = document.getElementsByClassName("close12")[0];

    // When the user clicks on the button, open the modal
    btn12.onclick = function() {
        modal12.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span12.onclick = function() {
        modal12.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal12.onclick = function(event12) {
        if (event12.target == modal12) {
            modal12.style.display = "none";
        }
    }

    // WH LOCATION D2
    var modal13 = document.getElementById('myModal13');

    // Get the button that opens the modal
    var btn13 = document.getElementById("d2");

    // Get the <span> element that closes the modal
    var span13 = document.getElementsByClassName("close13")[0];

    // When the user clicks on the button, open the modal
    btn13.onclick = function() {
        modal13.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span13.onclick = function() {
        modal13.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal13.onclick = function(event13) {
        if (event13.target == modal13) {
            modal13.style.display = "none";
        }
    }

    // WH LOCATION D3
    var modal14 = document.getElementById('myModal14');

    // Get the button that opens the modal
    var btn14 = document.getElementById("d3");

    // Get the <span> element that closes the modal
    var span14 = document.getElementsByClassName("close14")[0];

    // When the user clicks on the button, open the modal
    btn14.onclick = function() {
        modal14.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span14.onclick = function() {
        modal14.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal14.onclick = function(event14) {
        if (event14.target == modal14) {
            modal14.style.display = "none";
        }
    }

    // WH LOCATION D4
    var modal15 = document.getElementById('myModal15');

    // Get the button that opens the modal
    var btn15 = document.getElementById("d4");

    // Get the <span> element that closes the modal
    var span15 = document.getElementsByClassName("close15")[0];

    // When the user clicks on the button, open the modal
    btn15.onclick = function() {
        modal15.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span15.onclick = function() {
        modal15.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal15.onclick = function(event15) {
        if (event15.target == modal15) {
            modal15.style.display = "none";
        }
    }

    // Yard 1
    var modal16 = document.getElementById('myModal16');

    // Get the button that opens the modal
    var btn16 = document.getElementById("y1");

    // Get the <span> element that closes the modal
    var span16 = document.getElementsByClassName("close16")[0];

    // When the user clicks on the button, open the modal
    btn16.onclick = function() {
        modal16.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span16.onclick = function() {
        modal16.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal16.onclick = function(event16) {
        if (event16.target == modal16) {
            modal16.style.display = "none";
        }
    }

    // Yard 2
    var modal17 = document.getElementById('myModal17');

    // Get the button that opens the modal
    var btn17 = document.getElementById("y2");

    // Get the <span> element that closes the modal
    var span17 = document.getElementsByClassName("close17")[0];

    // When the user clicks on the button, open the modal
    btn17.onclick = function() {
        modal17.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span17.onclick = function() {
        modal17.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    modal17.onclick = function(event17) {
        if (event17.target == modal17) {
            modal17.style.display = "none";
        }
    }
</script>
</body>
</html>