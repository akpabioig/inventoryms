<?php
include('connection.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['salesid'])) {
    $soId = $_GET['salesid'];
    $sqlselect = "SELECT * FROM salesorder WHERE sid = $soId";
    $getResult = mysqli_query($db, $sqlselect);
}

//
$stockbalance = $db->query("SELECT stocklevel.stockbalance
                FROM stocklevel, salesitem, salesorder
                WHERE stocklevel.productid = salesitem.productid
                AND salesitem.sid = salesorder.sid
                AND salesorder.sid = {$soId}");
$stockbalance->setFetchMode(PDO::FETCH_ASSOC);
$stockbalance->fetchAll()[0]['stockbalance'];

$stockordered = $db->query("SELECT quantity
                FROM salesitem
                WHERE sid = {$soId}");
$stockordered->setFetchMode(PDO::FETCH_ASSOC);
$stockordered->fetchAll()[0]['quantity'];
//

$sql = "SELECT salesorder.datesales, salesorder.sid, addcustomer.customername,
        salesorder.deladdress, addproduct.productname, salesitem.quantity, salesorder.totalcost, salesorder.status
                          FROM addcustomer, salesorder, salesitem, addproduct
                          WHERE addcustomer.customerid = salesorder.customerid
                          AND salesitem.productid = addproduct.productid
                          AND salesitem.sid = salesorder.sid
                          AND status = 'pending'";
$result = mysqli_query($db, $sql);

$sql1 = "SELECT purchaseorder.datepurchase, purchaseorder.purchaseid, addsupplier.suppliername,
          addproduct.productname, purchaseitem.quantity, purchaseorder.total, purchaseorder.status
         FROM purchaseorder, addsupplier, purchaseitem, addproduct
         WHERE addsupplier.supplierid = purchaseorder.supplierid
         AND addproduct.productid = purchaseitem.productid
         AND purchaseorder.purchaseid = purchaseitem.purchaseid
         AND STATUS = 'pending'";
$result1 = mysqli_query($db, $sql1);
?>

<?php
if ($stockordered > $stockbalance) {
    echo "<script type = application/javascript>
            alert('Cant fulfil Order');
          </script>}";
    return false;
} else try {
    $sql = "UPDATE salesorder
            SET status = 'fulfilled'
                WHERE sid = {$soId}";
    $sth = $db->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
}
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
        <button id="logout"><a href="logout.php">LOG-OUT</a></button>
    </header>
    <section>
        <h3> PENDING ORDERS </h3>
        <img src="images/pending.png" style{height="250" width="200" }/>
        <h2>FULFILL/ DELETE ORDERS</h2>
        <h3>SCROLL TO THE END OF EITHER OF THE RECORDS TO FULFIL/DELETE ORDERS</h3>
        <form method="get" action="pendingorders.php">
        <div id="form3">
            <h2> SALES ORDERS dfdkj</h2>
            <table id="t2">
                <tr>
                    <th> DATE</th>
                    <th> SALES ID</th>
                    <th> CUSTOMER NAME</th>
                    <th> DELIVERY ADDRESS</th>
                    <th> PRODUCT ORDERED</th>
                    <th> QUANTITY ORDERED</th>
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
                        <td id = \"productname\" name= \"productname\" class = \"tablefield\" disabled>{$row['productname']}</td>
                        <td id = \"quantity\" name= \"quantity\" class = \"tablefield\" disabled>{$row['quantity']}</td>
                        <td id = \"totalcost\" name= \"totalcost\" class = \"tablefield\" disabled>{$row['totalcost']}</td>
                        <td id = \"status\" name= \"status\"  class = \"tablefield\" disabled>{$row['status']}</td>
                        <td><a href='pendingorders.php?salesid={$row['sid']}' onclick='return editconfig()'><img src = 'images/tick.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deletesalesorder.php?salesid={$row['sid']}' onclick='return deleteconfig()'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
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
                    <th> PRODUCT ORDERED</th>
                    <th> QUANTITY ORDERED</th>
                    <th> TOTAL COST</th>
                    <th> STATUS</th>
                </tr>
                <?php
                if (mysqli_num_rows($result1) == 1 || mysqli_num_rows($result1) > 1) {
                    while ($row1 = $result1->fetch_array()) {
                        echo "
                                <tr>
                        <td id = \"datepurchase\" name= \"datepurchase\" class = \"tablefield\" disabled>{$row1['datepurchase']}</td>
                        <td id = \"purchaseid\" name= \"purchaseid\" class = \"tablefield\" disabled>{$row1['purchaseid']}</td>
                        <td id = \"suppliername\" name= \"suppliername\" class = \"tablefield\" disabled>{$row1['suppliername']}</td>
                        <td id = \"productname\" name= \"productname\" class = \"tablefield\" disabled>{$row1['productname']}</td>
                         <td id = \"quantity\" name= \"quantity\"  class = \"tablefield\" disabled>{$row1['quantity']}</td>
                        <td id = \"total\" name= \"total\" class = \"tablefield\" disabled>{$row1['total']}</td>
                        <td id = \"status\" name= \"status\"  class = \"tablefield\" disabled>{$row1['status']}</td>
                        <td><a href='updatefulfillpurchase.php?purid={$row1['purchaseid']}' onclick='return editconfig1()'><img src = 'images/tick.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deletepurchaseorder.php?purid={$row1['purchaseid']}' onclick='return deleteconfig1()'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
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
<script>
    function editconfig() {
        var edit = confirm("ARE YOU SURE YOU WANT TO FULFILL THIS  SALES ORDER ?");
        if (edit == true) {
            return true;
        } else
            return false;
    }

    function deleteconfig() {

        var del = confirm("ARE YOU SURE YOU WANT TO DELETE THIS SALES ORDER ?");
        if (del == true) {
            alert(" SALES ORDER DELETED !!!")
        }
        return del;
    }

    function editconfig1() {
        var edit1 = confirm("ARE YOU SURE YOU WANT TO FULFILL THIS PURCHASE ORDER ?");
        if (edit1 == true) {
            alert("PURCHASE ORDER FULFILLED !!!")
        }
        return edit1;
    }

    function deleteconfig1() {
        var del1 = confirm("ARE YOU SURE YOU WANT TO DELETE THIS PURCHASE ORDER ?");
        if (del1 == true) {
            alert("PURCHASE ORDER DELETED !!!")
        }
        return del1;
    }
</script>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
