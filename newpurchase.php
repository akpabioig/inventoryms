<?php include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NEW PURCHASE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script type = "text/javascript" src="scripting.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#addp").click(function() {
                $('#form5 tbody>tr:last').clone(true).insertAfter('#form5 tbody>tr:last');
                return false;
            });
        });
    </script>
</head>
<body>
<nav class="w3-sidenav w3-black" style="width:102px">
    <a class="w3-padding-16" href="homepage.html"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
    <a class="w3-padding-16" href="#"><i class="fa fa-search w3-xlarge"></i> <br>SEARCH</a>
    <a class="w3-padding-16" href="addproduct.html"><i class="fa fa-plus-square w3-xlarge"></i> <br>ADD PRODUCT</a>
    <a class="w3-padding-16" href="addcustomer.php"><i class="fa fa-users w3-xlarge"></i> <br>ADD CUSTOMER</a>
    <a class="w3-padding-16" href="#"><i class="fa fa-dollar w3-xlarge"></i><br>SALES ORDER</a>
    <a class="w3-padding-16" href="newpurchase.html"><i class="fa fa-shopping-cart w3-xlarge"></i>PURCHASE ORDER</a>
    <a class="w3-padding-16" href="addvendor.html"><i class="fa fa-truck w3-xlarge"></i><br>ADD SUPPLIER</a>
    <a class="w3-padding-16" href="location.html"><i class="fa fa-map-marker w3-xlarge"></i><br>LOCATION</a>
</nav>
<div style="margin-left:70px">
    <header>
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
    </header>
    <section>
        <h3>NEW PURCHASE ORDER</h3>
        <img src= "images/pur.png" style{height="250" width="200"}/>
        <h2>New Purchase Order Details</h2>
        <p>Insert the details of the purchase to be made from a registered supplier </p>
        <p>Be careful to fill out compulsory fields indicated by the "*" key</p>
        <div id = "form1">
            <table>
                <tr>
                    <td label for="date"> <a id = "hash">*</a> Date : </td>
                    <td><input type="date" id = "date" name= "purchasedate"  value = "" class = "formfield"></td>
                </tr>
                <tr>
                    <td label for="supplier"> <a id = "hash">*</a> Select Supplier : </td>
                    <td>
                        <select name="supplier">
                            <option selected disabled>SELECT</option>
                            <?php

                            $sql= "SELECT supplierid, suppliername FROM addsupplier";
                            $result = mysqli_query($db, $sql);
                            if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                                while($row = $result -> fetch_array()){
                                    echo '<option value="'.$row[supplierid].'" >';
                                    echo $row['suppliername'];
                                    echo '</option>';
                                }
                            }else{
                                echo '<option> No Result Found </option>';
                            }
                            ?>
                        </select>
                    </td>
                    <td label for="ref"> <a id = "hash">*</a> Reference : </td>
                    <td><input type="ref" id = "ref1" name= "ref"  value = "" class = "formfield"></td>
                </tr>
            </table>
            <br>
            <table id = "form5">
                <tr>
                    <th>Prodcut Location</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Item Cost</th>
                    <th>Tax</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td><input type="text" id = "productlocation" name= "productlocation"  value = "" class = "tablefield"></td>
                    <td>
                        <select name = "productname">
                            <option disabled>Select Product</option>
                            <?php

                            $sql= "SELECT productname FROM addproduct";
                            $result = mysqli_query($db, $sql);
                            if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                                while($row = $result -> fetch_array()){
                                    echo '<option value="'.$row[supplierid].'" >';
                                    echo $row['productname'];
                                    echo '</option>';
                                }
                            }else{
                                echo '<option> No Result Found </option>';
                            }
                            ?>
                        </select>
                    </td>
                    <td><input type="number" id = "quantity" name= "quantity"  value = "" class = "tablefield"></td>
                    <td><input type="number" id = "cost" name= "itemcost"  value = "" class = "tablefield"></td>
                    <td><input type="number" id = "tax" name= "tax"  value = "" class = "tablefield"></td>
                    <td><input type="number" id = "itemtotal" name= "itemtotal"  value = "" class = "tablefield"></td>
                </tr>

            </table>
            <p align="center" ><a href = ""  id="addp"> + Add another item </a></p>
            <hr>
            <h6>Message to Supplier : </h6>
            <textarea id = "messsupplier" name="messsupplier" value="" class = "formfield" rows = 5 cols = 40></textarea>
            <table id = purtotal>
                <tr>
                    <td>Total Units : </td>
                    <td><input type="number" name = "totalunits" value = "" class = "formfield"></td>
                </tr>
                <tr>
                    <td>Subtotal : </td>
                    <td><input type="number" name = "itemsubtotal" value = "" class = "formfield"></td>
                </tr>
                <tr>
                    <td> Total Cost : </td>
                    <td><input type="totalcost" id = "totalcost" value = "" class = "formfield"></td>
                </tr>
            </table>
            <p id = "purtotal"><input type = "reset" value = "CLEAR">
                &nbsp; &nbsp; <input type = "submit" value = "SAVE"></p>
        </div>
    </section>
    <footer>
        <p>&copy; Akpabio Ignatius, 2016</p>
    </footer>
</body>
</html>