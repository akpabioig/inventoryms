<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include('connection.php');
//
$sql = "SELECT salesorder.datesales, salesorder.sid, addcustomer.customername, salesorder.deladdress, addproduct.productname AS salesproduct, salesorder.totalunits, salesorder.totalcost, salesorder.status
                          FROM addcustomer, salesorder, addproduct, salesitem
                          WHERE addcustomer.customerid = salesorder.customerid
                          AND addproduct.productid = salesitem.productid
                          AND salesorder.sid = salesitem.sid
                          AND status = 'fulfilled'";
$result = mysqli_query($db, $sql);

$sql1 = "SELECT purchaseorder.datepurchase, purchaseorder.purchaseid, addsupplier.suppliername, addproduct.productname AS purchaseproduct, purchaseorder.totalunits, purchaseorder.total, purchaseorder.status
         FROM purchaseorder, addsupplier, addproduct, purchaseitem
         WHERE addsupplier.supplierid = purchaseorder.supplierid
         AND addproduct.productid = purchaseitem.productid
         AND purchaseitem.purchaseid = purchaseorder.purchaseid
         AND STATUS = 'fulfilled'";
$result1 = mysqli_query($db, $sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FULFILLED ORDERS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="scripting.js"></script>
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
        <h3> FULFILLED ORDERS </h3>
        <img src="images/fulfilled.png" style{height="250" width="200" }/>
        <h2>FULFILL ORDERS</h2>
        <h3>BELOW IS A LIST OF ORDERS THAT HAVE BEEN FULFILLED </h3>
        <form method="get" action="fulfilledorders.php"
        ">
        <div id="form3">
            <h2>SALES ORDERS</h2>
            <table id="t2">
                <tr>
                    <th> DATE</th>
                    <th> SALES ID</th>
                    <th> CUSTOMER NAME</th>
                    <th> DELIVERY ADDRESS</th>
                    <th> PRODUCT NAME</th>
                    <th> TOTAL UNITS</th>
                    <th> TOTAL COST</th>
                    <th> STATUS</th>
                </tr>
                <?php
                if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
                    while ($row = $result->fetch_array()) {
                        echo "
                    <tr>
                        <td id = \"datesales\" name= \"datesales\" class = \"tablefield\" disabled>{$row['datesales']}</td>
                        <td id = \"sid\" name= \"sid\" class = \"tablefield\" disabled>{$row['sid']}</td>
                        <td id = \"customername\" name= \"customername\" class = \"tablefield\" disabled>{$row['customername']}</td>
                        <td id = \"deladdress\" name= \"deladdress\" class = \"tablefield\" disabled>{$row['deladdress']}</td>
                        <td id = \"salesproduct\" name= \"salesproduct\" class = \"tablefield\" disabled>{$row['salesproduct']}</td>
                        <td id = \"totalunits\" name= \"totalunits\" class = \"tablefield\" disabled>{$row['totalunits']}</td>
                        <td id = \"totalcost\" name= \"totalcost\" class = \"tablefield\" disabled>{$row['totalcost']}</td>
                        <td id = \"status\" name= \"status\"  class = \"tablefield\" disabled>{$row['status']}</td>
                    </tr>

                                ";
                    }
                } else {
                    echo '<option> No Result Found </option>';
                }
                ?>
            </table>
            <h2>PURCHASE ORDERS</h2>
            <table>
                <tr>
                    <th> DATE</th>
                    <th> PURCHASE ID</th>
                    <th> SUPPLIER NAME</th>
                    <th> PRODUCT NAME</th>
                    <th> TOTAL UNITS</th>
                    <th> TOTAL COST</th>
                    <th> STATUS</th>
                </tr>
                <?php
                if (mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) > 1) {
                    while ($row1 = $result1->fetch_array()) {
                        echo "
                                <tr>
                        <td id = \"datesales\" name= \"datesales\" class = \"tablefield\" disabled>{$row1['datepurchase']}</td>
                        <td id = \"purchaseid\" name= \"purchaseid\" class = \"tablefield\" disabled>{$row1['purchaseid']}</td>
                        <td id = \"suppliername\" name= \"suppliername\" class = \"tablefield\" disabled>{$row1['suppliername']}</td>
                        <td id = \"purchaseproduct\" name= \"purchaseproduct\"   class = \"tablefield\" disabled>{$row1['purchaseproduct']}</td>
                        <td id = \"totalunits\" name= \"totalunits\"   class = \"tablefield\" disabled>{$row1['totalunits']}</td>
                        <td id = \"total\" name= \"total\"  class = \"tablefield\" disabled>{$row1['total']}</td>
                        <td id = \"status\" name= \"status\" class = \"tablefield\" disabled>{$row1['status']}</td>

                    </tr>
                                ";
                    }
                } else {
                    echo '<option> No Result Found </option>';
                }
                ?>
            </table>
        </div>
        </form>
    </section>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
