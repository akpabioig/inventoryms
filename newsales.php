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
    <title>NEW SALES</title>
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
        var price, locid;
        $(document).ready(function() {
            $("#addp").click(function() {
                $('#form5 tbody>tr:last').clone(true).insertAfter('#form5 tbody>tr:last');
                return false;
            });
        });
    </script>

</head>
<body>
<nav class="w3-sidenav w3-black" style="width:102px"> <!-- -->
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
        <h3>NEW SALES ORDER </h3>
        <img src= "images/sales.jpg" style{height="250" width="200"}/>
        <h2>New Sales Order Details</h2>
        <p>Insert the details of the sale to be made to a registered customer </p>
        <p>Be careful to fill out compulsory fields indicated by the "*" key</p>
        <form method="post" action="sales.php" onsubmit="return validatesalesForm()">
        <div id = "form1">
            <table>
                <tr>
                    <td label for="date"> <a id = "hash">*</a> Date : </td>
                    <td><input type="date" id="date" name="datesales" required class="formfield"></td>
                </tr>
                <tr>
                    <td label for="selcust"> <a id = "hash">*</a> Select Customer : </td>
                    <td>
                        <select name="customer" required>
                        <option selected disabled>SELECT</option>
                        <?php
                        $sql= "SELECT customerid, customername FROM addcustomer";
                        $result = mysqli_query($db, $sql);
                        if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){
                            while($row = $result -> fetch_array()){
                               echo '<option value="'.$row['customerid'].'" >';
                               echo $row['customername'];
                               echo '</option>';

                            }
                        }else{
                            echo '<option> No Result Found </option>';
                        }
                        ?>
                    </select>
                    </td>
                    <td label for="ref"> <a id = "hash">*</a> Reference : </td>
                    <td><input type="text" id = "ref1" name= "refcust"  value = "" class = "formfield"></td>
                </tr>
                <tr>
                    <td label for="deliveryaddress"><a id="hash">*</a> Delivery Address :</td>
                    <td><textarea id="deladdcust" name="deladdcust" required class="formfield" rows=5
                                  cols=28></textarea></td>
                    <td label for="paytype"> <a id = "hash">*</a> Payment Type : </td>
                    <td>
                        <select class="formfield" name="paytcust" required>
                            <option selected disabled>SELECT</option>
                            <option value = "CASH"> CASH </option>
                            <option value = "CHEQUE"> CHEQUE </option>
                            <option value="CREDIT/DEBIT CARD"> CREDIT/DEBIT CARD </option>>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <table id = "form5">
                <tr>
                    <th> Item Location </th>
                    <th> Item Name</th>
                    <th>Quantity</th>
                    <th>Item Cost</th>
                    <th>Tax (%)</th>
                    <th>Discount (Amount)</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td><input type="text" id="itemcustl" readonly name="itemcustl" class="tablefield"></td>
                    <td>
                        <select id="product" name="selproduct">
                        <option selected disabled>SELECT PRODUCT</option>
                            <?php

                                $sql= "SELECT productid, productname, locationid, retailprice FROM addproduct";
                                $result = mysqli_query($db, $sql);
                                if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                                    while($row = $result -> fetch_array()) {
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
                    $salesidquery = "SELECT max(sid) FROM salesorder";
                    $r = mysqli_query($db, $salesidquery);
                    while($row = $r ->fetch_array()){
                        $salesid = $row['0'];
                    }
                    $salesid += 10;
                    ?>
                    <td><input type="number" id="quancust" name="quancust" required class="tablefield1"></td>
                    <td><input type="number" readonly id="costcust" name="costcust" class="tablefield1"></td>
                    <td><input type="number" id="taxcust" name="taxcust" required class="tablefield1"></td>
                    <td><input type="number" id="discountcust" required name="discountcust" class="tablefield1"></td>
                    <td><input type="number" readonly id="minitotal" name="minitotal" value="" class="tablefield1"></td>
                    <input type="hidden" value="<?php echo $salesid; ?>" name="salesid" id="salesid" />
                </tr>

            </table>
            <p align="center" ><a href = ""  id="addp"> + Add another item </a></p>
            <hr>
            <h6> Additional Information on Sales : </h6>
            <textarea id="messcust" name="messcust" class="formfield" rows=5 cols=40></textarea>
            <table id = purtotal>
                <tr>
                    <td>Total Units : </td>
                    <td><input type="number" id="totunitcust" readonly name="totunitcust" class="formfield">
                    </td>
                </tr>
                <tr>
                    <td>Subtotal(Total - Tax):</td>
                    <td><input type="number" readonly id="subtotal" name="subtotalcust" class="formfield"></td>
                </tr>
                <tr>
                    <td> Total Cost : </td>
                    <td><input type="number" id="tot" readonly name="totalcost" value="" class="formfield"></td>
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
    $(document).ready(function(){
        $("#product").change(function () {

            $.ajax({
                url: 'get.php',
                type: 'POST',
                data: {search: this.value}
            }).done(function (data) {
                // do stuff
                var amount = data.match(/\d+$/);
                var digit = (''+amount)[0];
                realFigure = '' + amount;
                adjustedFigure = realFigure.slice(1, realFigure.length);
                var answer = data;
                answer = answer.replace(/\d/g, '');
                $("#itemcustl").val(answer+digit);
                $("#costcust").val(adjustedFigure);
            })
        });

        $("#quancust").change(function(){
            $("#minitotal").val(parseInt(parseInt(this.value)* parseInt(adjustedFigure)));
            $("#totunitcust").val(this.value);
        })

        $("#taxcust").change(function(){
            $("#minitotal").val(parseInt(parseInt(document.getElementById('minitotal').value) + (parseInt(this.value)/100 * parseInt(document.getElementById('minitotal').value))));
            $("#tot").val(document.getElementById('minitotal').value);
        })
        $("#discountcust").change(function(){
            $("#minitotal").val(parseInt(document.getElementById('minitotal').value) - parseInt(this.value));
            $("#tot").val(document.getElementById('minitotal').value);
            $("#subtotal").val(parseInt(parseInt(document.getElementById('costcust').value) * parseInt(document.getElementById('quancust').value)) - parseInt(document.getElementById('discountcust').value));

        })
    });
</script>
</html>
