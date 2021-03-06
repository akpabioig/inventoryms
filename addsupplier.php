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
    <title>ADD SUPPLIER</title>
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
        <h3>ADD SUPPLIER</h3>
        <img src= "images/supp.png" style{height="250" width="200"}/>
        <h2>Supplier Details</h2>
        <p>Insert the details of the new supplier to be added to the inventory list</p>
        <p>Be careful to fill out compulsory fields indicated by the "<a id="hash">*</a>" key</p>
        <form method="post" action="supplier.php" onsubmit="return validatesupplierForm()">
            <div id = "form1">
                <table>
                    <tr>
                        <td label for="suppn"> <a id = "hash">*</a> Supplier Name : </td>
                        <td><input type="text" id="suppn" name="suppn" placeholder="E.g. Ionic Metal Fabrications"class = "formfield" rows = 1 required></td>
                    </tr>
                    <tr>
                        <td label for ="contp"> Contact Person : </td>
                        <td><input type="text" id = "contp" name= "contp"  value = "" class = "formfield" rows = 1 ></td>
                        <td label for ="contppn"> Contact Person Tel Number: </td>
                        <td><input type="text" id = "contppn" name= "contppn"  value = "" class = "formfield" rows = 1 ></td>
                    </tr>
                    <tr>
                        <td label for ="supptel"> <a id = "hash">*</a> Tel Number : </td>
                        <td><input type="text" id = "suppte" name= "supptel"  placeholder="Company Phone No." class = "formfield" rows = 1 required></td>
                        <td label for ="suppfax"> Fax: </td>
                        <td><input type="text" id = "suppfa" name= "suppfax"  placeholder="Company Fax" class = "formfield" rows = 1 ></td>
                    </tr>
                    <tr>
                        <td label for ="suppurl"> Website URL : </td>
                        <td><input type="url" id = "suppurl" name= "suppurl"  value = "http://" class = "formfield" rows = 1 ></td>
                        <td label for ="suppemail"> <a id = "hash">*</a> Supplier Email Address : </td>
                        <td><input type="email" id = "suppemail" name= "suppemail"  placeholder="E.g. ionic@gmail.com" class = "formfield" rows = 1 required></td>
                    </tr>
                    <tr>
                        <td label for ="desc"> Description : </td>
                        <td><textarea id = "desc" name= "desc"  value = "" class = "formfield" rows = 5 cols = 30 ></textarea></td>
                </table>
            </div>
            <h2>Supplier Address </h2>
            <p> Insert details of the address of the company </p>
            <div  id = "form2">
                <table>
                    <tr>
                        <td label for="add1"> <a id = "hash">*</a> Address Line 1 : </td>
                        <td><input type="text" id="add1" name="add1" placeholder="E.g. 10 Pittodrie Place"
                                   class="formfield" rows=1 required></td>
                        <td label for ="add2"> Address Line 2 : </td>
                        <td><input type="text" id="add2" name="add2" value="" class = "formfield" rows = 1></td>
                    </tr>
                    <tr>
                        <td label for="town"> <a id = "hash">*</a> Town/City : </td>
                        <td><input type="text" id="town" name="town" placeholder="E.g. Aberdeen" class="formfield"
                                   rows=1 required></td>
                        <td label for ="county"> County : </td>
                        <td><input type="text" id="county" name="county" placeholder="E.g. Aberdeenshire" class = "formfield" rows = 1></td>
                    </tr>
                    <tr>
                        <td label for="postc"> Postcode :</td>
                        <td><input type="text" id="postc" name="postcode" placeholder="E.g. AB458JH"  class = "formfield" rows = 1 cols = 5></td>
                        <td label for ="country"> <a id = "hash">*</a> Country : </td>
                        <td><input type="text" id="country" name="country" placeholder="E.g. United Kingdom"
                                   class="formfield" rows=1 required></td>
                    </tr>
                </table>
            </div>
            <p id = "subbutt"><input type = "reset" value = "CLEAR">
                &nbsp; &nbsp; <input type = "submit" value = "SAVE"></p>
        </form>
    </section>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
