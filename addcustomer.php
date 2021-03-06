<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
include('connection.php'); ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ADD CUSTOMER</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <link rel="stylesheet" href = "styling.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <script type = "text/javascript" src="scripting.js"></script>
    </head>
    <script type="application/javascript">
        function ps(){
            $(document).ready(function() {
                $("#addApi").click(function(){
                    $.ajax({
                        url: 'ajax.php', //This is the current doc
                        type: "POST",
                        data: ({name: 145}),
                        success: function(data){
                            console.log(data);
                        }
                    });
                    $.ajax({
                        url:'ajax.php',
                        data:"",
                        dataType:'json',
                        success:function(data1){
                            var y1=data1;
                            console.log(data1);
                        }
                    });

                });
            });
        }
    </script>
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
        <h3>ADD CUSTOMER</h3>
        <img src= "images/cust.png" style{height="250" width="200"}/>
        <h2>Customer Details</h2>
        <p>Insert the details of the new customer to be added to the inventory list</p>
        <p>Be careful to fill out compulsory fields indicated by the "<a id="hash">*</a>" key</p>
        <form method="post" action="customer.php" onsubmit="return validatecustomerForm()">
            <div id = "form1">
                <table>
                    <tr>
                        <td label for="custtype"> <a id = "hash">*</a> Customer Type : </td>
                        <td>
                            <select class = "formfield" name = "type">
                                <option selected disabled>SELECT</option>
                                <option value = "Company">COMPANY</option>
                                <option value = "Individual">INDIVIDUAL</option>
                            </select>
                        </td>
                        <td label for="custn"> <a id = "hash">*</a> Customer Name : </td>
                        <td><input type="text" id="custn" name="custn" placeholder="E.g. Robert Young" class = "formfield" rows = 1 required></td>
                    </tr>
                    <tr>
                        <td label for ="custtel"> <a id = "hash">*</a> Tel Number : </td>
                        <td><input type="text" id = "custtel" name= "custtel"  placeholder="Customer Phone No."  class = "formfield" rows = 1 required></td>
                        <td label for ="custfax"> Fax: </td>
                        <td><input type="text" id = "custfax" name= "custfax"  placeholder="Customer Fax"  class = "formfield" rows = 1 ></td>
                    </tr>
                    <tr>
                        <td label for ="custurl"> Website URL : </td>
                        <td><input type="url" id = "custurl" name= "custurl"  placeholder="E.g. www.google.com" class = "formfield" rows = 1 value = "http://"></td>
                        <td label for ="custemail"> <a id = "hash">*</a> Customer Email Address : </td>
                        <td><input type="email" id = "custemail" name= "custemail"  value = "" class = "formfield" rows = 1 placeholder="E.g. rguoilservices@rgu.ac.uk" required></td>
                    </tr>
                    <tr>
                        <td label for ="desc"> Description : </td>
                        <td><textarea id = "desc" name= "desc"  value = "" class = "formfield" rows = 5 cols = 30 value = ""></textarea></td>
                </table>
            </div>
            <h2>Customer Address </h2>
            <p> Insert details of the address of the Customer </p>
            <div  id = "form2">
                <table>
                    <tr>
                        <td label for="custadd1"> <a id = "hash">*</a> Address Line 1 : </td>
                        <td><input type="text" id="custadd1" name="custadd1" placeholder="E.g. 10 Pittodrie Place" class = "formfield" rows = 1></td>
                        <td label for ="custadd2"> Address Line 2 : </td>
                        <td><input type="text" id="custadd2" name="custadd2" value="" class = "formfield" rows = 1></td>
                    </tr>
                    <tr>
                        <td label for="ctown"> <a id = "hash">*</a> Town/City : </td>
                        <td><input type="text" id="ctown" name="ctown" placeholder="E.g. Aberdeen" class = "formfield" rows = 1></td>
                        <td label for ="ccounty"> County : </td>
                        <td><input type="text" id="ccounty" name="ccounty" placeholder="E.g. Aberdeenshire" class = "formfield" rows = 1></td>
                    </tr>
                    <tr>
                        <td label for="cpostc"> Postcode/ Zipcode :</td>
                        <td><input type="text" id="cpostc" name="cpostc" placeholder="E.g. AB207FR" class = "formfield" rows = 1 cols = 5></td>
                        <td label for ="ccountry"> <a id = "hash">*</a> Country : </td>
                        <td><input type="text" id="ccountry" name="ccountry" placeholder="E.g. United Kingdom" class = "formfield" rows = 1></td>
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
<?php

