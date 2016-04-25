<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include('connection.php');
$sql = "SELECT stocklevel.stocklevelid, addproduct.productname, stocklevel.stockbalance, stocklevel.level
                          FROM stocklevel, addproduct
                          WHERE stocklevel.productid = addproduct.productid
                          ORDER BY productname";
$sql = "UPDATE stocklevel
                SET stocklevel.level = 'No Restock !!!'
                    WHERE stocklevel.stockbalance > 40";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STOCK LEVEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h3>PRODUCTS STOCK LEVEL</h3>
        <img src="images/product.png" style{height="250" width="200" }/>
        <h2> NUMBER OF ITEMS IN STOCK </h2>
        <p>FIND BELOW THE CURRENT NUMBER OF PRODUCTS IN STOCK</p>
        <form method="get" action="stocklevel.php">
            <div id="form3">
                <button id="export"> Export To Excel Sheet</button>
                <div id="producttable">
                    <table>
                        <tr>
                            <th> STOCKLEVEL ID</th>
                            <th> PRODUCT NAME</th>
                            <th> PRODUCT IN STOCK</th>
                            <th> STOCK LEVEL INFORMATION 1</th>
                        </tr>
                        <tbody id="t2">
                        <?php
                        if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
                            while ($row = $result->fetch_array()) {
                                echo "
                    <tr>
                        <td id = \"stocklevelid\" name= \"stocklevelid\" class = \"tablefield\" disabled>{$row['stocklevelid']}</td>
                        <td id = \"productname\" name= \"productname\" class = \"tablefield\" disabled>{$row['productname']}</td>
                        <td id = \"stockbalance\" name= \"stockbalance\" class = \"tablefield\" disabled>{$row['stockbalance']}</td>
                        <td id = \"level\" name= \"level\" class = \"tablefield\" disabled>{$row['level']}</td>
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
                var table_div = document.getElementById('producttable');
                var table_html = table_div.outerHTML.replace(/ /g, '%20');
                a.href = data_type + ', ' + table_html;
                //setting the file name
                a.download = 'Stocklevel_Inventory_' + postfix + '.xls';
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
