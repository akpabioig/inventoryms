<?php
/*session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}*/

include('connection.php');
//
$sql = "SELECT salesorder.datesales, salesorder.sid, addcustomer.customername, salesorder.deladdress, salesorder.paymenttype, salesorder.totalunits, salesorder.totalcost, salesorder.status
                          FROM addcustomer, salesorder
                          WHERE addcustomer.customerid = salesorder.customerid
                          AND status = 'pending'";
$result = mysqli_query($db, $sql);

$sql1 = "SELECT purchase.datepurchase, purchaseorder.purchaseid, addsupplier.suppliername, purchaseorder.totalunits, purchaseorder.total, purchase.status
         FROM purchaseorder, addsupplier
         WHERE addsupplier.supplirid = purchaseorder.supplierid
         AND STATUS = 'pending'";
$result1 = mysqli_query($db, $sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PENDING ORDERS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <a class="w3-padding-16" href="homepage.php"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
    <a class="w3-padding-16" href="#"><i class="fa fa-search w3-xlarge"></i> <br>SEARCH</a>
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
        <button id="logout" href="logout.php">LOG OUT</button>
    </header>
    <section>
        <h3> PENDING ORDERS </h3>
        <img src="images/pending.png" style{height="250" width="200" }/>
        <h2>FULFILL/ DELETE ORDERS</h2>
        <p>SCROLL TO THE END OF THE RECORD TO FULFIL? DELETE ORDERS</p>
        <form method="get" action="pendingorders.php"
        ">
        <div id="form3">
            <table id="t2">
                <tr>
                    <th> DATE</th>
                    <th> SALES ID</th>
                    <th> CUSTOMER NAME</th>
                    <th> DELIVERY ADDRESS</th>
                    <th> PAYMENT TYPE</th>
                    <th> TOTAL UNITS</th>
                    <th> TOTAL COST</th>
                    <th> STATUS</th>
                </tr>
                <?php
                if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
                    while ($row = $result->fetch_array()) {
                        echo "
                                <tr>
                        <td><input type=\"text\" id = \"datesales\" name= \"datesales\"  value = \"{$row['salesorder.datesales']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"sid\" name= \"sid\"  value = \"{$row['salesorder.sid']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"customername\" name= \"customername\"  value = \"{$row['addcustomer.customername']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"deladdress\" name= \"deladdress\"  value = \"{$row['salesorder.deladdress']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"paymenttype\" name= \"paymenttype\"  value = \"{$row['salesorder.paymenttype']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"totalunits\" name= \"totalunits\"  value = \"{$row['salesorder.totalunits']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"totalcost\" name= \"totalcost\"  value = \"{$row['salesorder.totalcost']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"status\" name= \"status\"  value = \"{$row['salesorder.status']}\" class = \"tablefield\" disabled></td>
                        <td><a href='updatefulfilorder.php?salesid={$row['sid']}'><img src = 'images/tick.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deleteproduct.php?prodid={$row['productid']}'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
                    </tr>

                                ";
                    }
                } else {
                    echo '<option> No Result Found </option>';
                }
                ?>
            </table>
            <tr>
                <th> DATE</th>
                <th> PURCHASE ID</th>
                <th> SUPPLIER NAME</th>
                <th> TOTAL UNITS</th>
                <th> TOTAL COST</th>
                <th> STATUS</th>
            </tr>
            <?php
            if (mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) > 1) {
                while ($row1 = $result1->fetch_array()) {
                    echo "
                                <tr>
                        <td><input type=\"text\" id = \"datesales\" name= \"datesales\"  value = \"{$row['purchaseorder.datesales']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"purchaseid\" name= \"purchaseid\"  value = \"{$row['purchaseorder.purchaseid']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"suppliername\" name= \"suppliername\"  value = \"{$row['addsupplier.suppliername']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"totalunits\" name= \"totalunits\"  value = \"{$row['purchaseorder.totalunits']}\" class = \"tablefield\" disabled></td>                        <td><input type=\"text\" id = \"totalunits\" name= \"totalunits\"  value = \"{$row['totalunits']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"total\" name= \"total\"  value = \"{$row['purchaseorder.total']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"status\" name= \"status\"  value = \"{$row['purchaseorder.status']}\" class = \"tablefield\" disabled></td>
                        <td><a href='updatefulfilorder.php?purid={$row['purchaseid']}'><img src = 'images/tick.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deleteproduct.php?prodid={$row['productid']}'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
                    </tr>

                                ";
                }
            } else {
                echo '<option> No Result Found </option>';
            }
            ?>
            <table>

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
