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
    <title>NEW PURCHASE</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
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
        <h3>NEW PURCHASE ORDER</h3>
        <img src= "images/pur.png" style{height="250" width="200"}/>
        <h2>New Purchase Order Details</h2>
        <p>Insert the details of the purchase to be made from a registered supplier </p>
        <p>Be careful to fill out compulsory fields indicated by the "*" key</p>
        <form method="post" action="purchase.php" onsubmit="return validatepurchaseForm()">
        <div id = "form1">
            <table>
                <tr>
                    <td label for="date"> <a id = "hash">*</a> Date : </td>
                    <td><input type="date" id="date" name="purchasedate" required class="formfield"></td>
                </tr>
                <tr>
                    <td label for="supplier"> <a id = "hash">*</a> Select Supplier : </td>
                    <td>
                        <select name="supplier" required>
                            <option selected disabled>SELECT</option>
                            <?php

                            $sql= "SELECT supplierid, suppliername FROM addsupplier";
                            $result = mysqli_query($db, $sql);
                            if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                                while($row = $result -> fetch_array()){
                                    echo '<option value="'.$row['supplierid'].'" >';
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
                    <td><input type="ref" id="ref" name="ref" value="" class="formfield"></td>
                </tr>
            </table>
            <br>
            <table id = "form5">
                <tr>
                    <th>Prodcut Location</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Item Cost</th>
                    <th>Tax (%)</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td><input type="text" id="productlocation" name="productlocation" readonly class="tablefield"></td>
                    <td>
                        <select name="productname" id="productname">
                            <option selected disabled>SELECT PRODUCT</option>
                            <?php
                            $sql = "SELECT productid, productname, locationid, initialstockprice FROM addproduct";
                            $result = mysqli_query($db, $sql);
                            if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                                while ($row = $result->fetch_array()) {
                                    echo '<option value="' . $row['productid'] . '">';
                                    echo $row['productname'];
                                    echo '</option>';
                                }
                            }else{
                                echo '<option> No Result Found </option>';
                            }
                            ?>
                        </select>
                    </td>
                    <?php
                    $purchaseidquery = "SELECT max(purchaseid) FROM purchaseorder";
                        $r = mysqli_query($db, $purchaseidquery);
                        while($row = $r ->fetch_array()){
                            $pid = $row['0'];
                        }
                        $pid += 10;
                    ?>
                    <td><input type="number" id="quantity" name="quantity" required class="tablefield1"></td>
                    <td><input type="number" id="itemcost" name="itemcost" readonly class="tablefield1"></td>
                    <td><input type="number" id="tax" name="tax" required class="tablefield1"></td>
                    <td><input type="number" id="itemtotal" name="itemtotal" readonly required class="tablefield1"></td>
                    <input type="hidden" value="<?php echo $pid; ?>" name="pid" id="pid" />
                </tr>

            </table>
            <p align="center" ><a href = "#" onclick="add('form5'); return false;"> + Add another item </a></p>
            <hr>
            <h6>Additional Information On Purchase : </h6>
            <textarea id = "messsupplier" name="messsupplier" value="" class = "formfield" rows = 5 cols = 40></textarea>
            <table id = purtotal>
                <tr>
                    <td>Total Units : </td>
                    <td><input type="number" id="totalunit" readonly name="totalunit" value="" class="formfield"></td>
                </tr>
                <tr>
                    <td>Subtotal(Total - Tax):</td>
                    <td><input type="number" id="subtotal" readonly name="subtotal" value="" class="formfield"></td>
                </tr>
                <tr>
                    <td> Total Cost : </td>
                    <td><input type="number" id="totalcost" readonly name="totalcost" value="" class="formfield"></td>
                </tr>
            </table>
            <p id = "purtotal"><input type = "reset" value = "CLEAR">
                &nbsp; &nbsp; <input type="submit" value="CREATE ORDER"></p>
        </div>
            </form>
    </section>
    <footer>
        <p>&copy; Akpabio Ignatius, 2016</p>
    </footer>
</body>

<script>
    var realFigure, adjustedFigure;
    $(document).ready(function () {
        $("#productname").change(function () {

            $.ajax({
                url: 'getpurchase.php',
                type: 'POST',
                data: {search: this.value}
            }).done(function (data) {
                // do stuff
                var amount = data.match(/\d+$/);
                var digit = ('' + amount)[0];
                realFigure = '' + amount;
                adjustedFigure = realFigure.slice(1, realFigure.length);
                var answer = data;
                answer = answer.replace(/\d/g, '');
                $("#productlocation").val(answer + digit);
                $("#itemcost").val(adjustedFigure);
            })
        });

        $("#quantity").change(function () {
            $("#itemtotal").val(parseInt(parseInt(this.value) * parseInt(adjustedFigure)));
            $("#totalunit").val(this.value);
        })

        $("#tax").change(function () {
            $("#itemtotal").val(parseInt(parseInt(document.getElementById('itemtotal').value) + (parseInt(this.value) / 100 * parseInt(document.getElementById('itemtotal').value))));
            $("#totalcost").val(document.getElementById('itemtotal').value);
            $("#subtotal").val(parseInt(parseInt(document.getElementById('itemcost').value) * parseInt(document.getElementById('quantity').value)));
        })

    });
</script>
</html>