<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include('connection.php');
$sql = "SELECT  purchaseitem.purchaseid, purchaseorder.datepurchase, addsupplier.suppliername,
        addproduct.productname, purchaseitem.itemcost, purchaseitem.quantity,
        purchaseitem.tax, purchaseitem.total AS itemtotal, purchaseorder.total AS ordertotal
        FROM addproduct, purchaseorder, purchaseitem, addsupplier
        WHERE purchaseitem.productid = addproduct.productid
        AND purchaseorder.supplierid = addsupplier.supplierid
        AND purchaseorder.purchaseid = purchaseitem.purchaseid
        AND purchaseorder.status = 'fulfilled'";

$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PURCHASE ORDERS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="scripting.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
        <h3> PURCHASE ORDERS </h3>
        <img src="images/pur.png" style{height="250" width="200" }/>
        <h2> COMPLETED PURCHASE ORDERS </h2>
        <p>FIND BELOW THE LIST OF ALL THE ORDERS THAT HAVE BEEN PURCHASE FROM SUPPLIER </p>
        <form method="get" action="allpurchase.php">
            <div id="form3">
                <select name="sortpurchase" id="sortpurchase">
                    <option selected disabled> ORDER BY</option>
                    <option value="datepurchase"> DATE OF PURCHASE</option>
                    <option value="suppliername"> SUPPLIER NAME</option>
                    <option value="productname"> PRODUCT NAME</option>
                    <option value="ordertotal"> ORDER TOTAL</option>
                </select>
                <button id="export"> Export To Excel Sheet</button>
                <div id="purchasetable">
                    <table id="t2">
                        <tr>
                            <th> PURCHASE ID</th>
                            <th> DATE OF PURCHASE</th>
                            <th> SUPPLIER NAME</th>
                            <th> PRODUCT NAME</th>
                            <th> PRODUCT UNIT COST</th>
                            <th> PRODUCT QUANTITY</th>
                            <th> TAX ON PRODUCT</th>
                            <th> ITEM TOTAL</th>
                            <th> ORDER TOTAL</th>
                        </tr>
                        <tbody id="pordertd">
                        <?php
                        if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {

                            while ($row = $result->fetch_array()) {
                                echo "
                    <tr>
                        <td id = \"purchaseid\" name= \"purchaseid\" class = \"tablefield\" disabled>{$row['purchaseid']}</td>
                        <td id = \"datepurchase\" name= \"datepurchase\" class = \"tablefield\" disabled>{$row['datepurchase']}</td>
                        <td id = \"suppliername\" name= \"suppliername\" class = \"tablefield\" disabled>{$row['suppliername']}</td>
                        <td id = \"productname\" name= \"productname\" class = \"tablefield\" disabled>{$row['productname']}</td>
                        <td id = \"itemcost\" name= \"itemcost\" class = \"tablefield\" disabled> {$row['itemcost']} </td>
                        <td id = \"quantity\" name= \"quantity\" class = \"tablefield\" disabled>{$row['quantity']}</td>
                        <td id = \"tax\" name= \"tax\" class = \"tablefield\" disabled> {$row['tax']} </td>
                        <td id = \"itemtotal\" name= \"itemtotal\" class = \"tablefield\" disabled>{$row['itemtotal']}</td>
                        <td id = \"ordertotal\" name= \"ordertotal\"  class = \"tablefield\" disabled> {$row['ordertotal']}</td>
                    </tr>
                                ";
                            }
                        } else {
                            echo '<option> No Result Found </option>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </section>
    <script>
        $(document).ready(function () {
            // Each time you change your sort list, send AJAX request
            $("#sortpurchase").change(function () {
                $.ajax({
                        method: "POST",
                        url: "requestpurchase.php",
                        data: {sortpurchase: $("#sortpurchase").val()}
                    })
                    // Copy the AJAX response in the table
                    .done(function (msg) {
                        $("#pordertd").html(msg);
                    });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#export").click(function (e) {
                //getting values of current time for generating the file name
                var dt = new Date();
                var day = dt.getDate();
                var month = dt.getMonth() + 1;
                var year = dt.getFullYear();
                var hour = dt.getHours();
                var mins = dt.getMinutes();
                var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
                //creating a temporary HTML link element (they support setting file names)
                var a = document.createElement('a');
                //getting data from our div that contains the HTML table
                var data_type = 'data:application/vnd.ms-excel';
                var table_div = document.getElementById('purchasetable');
                var table_html = table_div.outerHTML.replace(/ /g, '%20');
                a.href = data_type + ', ' + table_html;
                //setting the file name
                a.download = 'PurchaseOrder_Inventory_' + postfix + '.xls';
                //triggering the function
                a.click();
                //just in case, prevent default behaviour
                e.preventDefault();
            });
        });
    </script>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
