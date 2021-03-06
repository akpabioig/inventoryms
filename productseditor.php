<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include('connection.php');
//
$sql= "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRODUCTS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href = "styling.css"/>
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
    <a class="w3-padding-16" href="#"><i class="fa fa-search w3-xlarge"></i> <br>SEARCH</a>
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
        <h3>PRODUCTS</h3>
        <img src= "images/product.png" style{height="250" width="200"}/>
        <h2>EDIT PRODUCT ENTRIES</h2>
        <p>SCROLL TO THE END OF THE RECORD AND CLICK THE EDIT ICON</p>
        <form method="get" action="productseditor.php"">
            <div id = "form3">
                <select name="sortby" id="sortby">
                    <option selected disabled> ORDER BY </option>
                    <option value = "productid"> PRODUCT ID </option>
                    <option value = "productname"> PRODUCT NAME </option>
                    <option value = "locationid"> PRODUCT LOCATION </option>
                    <option value = "suppliername"> SUPPLIER NAME  </option>
                </select>
                <table id="t2">
                    <tr>
                        <th> ID </th>
                        <th>Serial Number </th>
                        <th>Name</th>
                        <th>Description </th>
                        <th>Supplier Name</th>
                        <th>Product Location</th>
                        <th>Initial Stock Price</th>
                        <th>Wholesale Price</th>
                        <th>Retail Price</th>
                    </tr>
                    <tbody id="customertd">
                    <?php
                    if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){
                        while($row = $result -> fetch_array()){
                            echo "
                                <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row['productid']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row['productserialnumber']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row['productname']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row['productdescription']}\" class = \"tablefield\" disabled></td>

                        <td><input type=\"text\" id = \"suppliername\" name= \"suppliername\"  value = \"{$row['suppliername']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"locationid\" name= \"locationid\"  value = \"{$row['locationid']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row['initialstockprice']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row['wholesaleprice']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row['retailprice']}\" class = \"tablefield\" disabled></td>
                        <td><a href='edit-product.php?prodid={$row['productid']}' onclick='return editconfig()'><img src = 'images/edit.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deleteproduct.php?prodid={$row['productid']}' onclick='return deleteconfig()'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
                    </tr>

                                ";
                        }
                    }else{
                        echo '<option> No Result Found </option>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </form>
      </section>
    <script>
        $(document).ready(function(){
            // Each time you change your sort list, send AJAX request
            $("#sortby").change(function(){
                $.ajax({
                        method: "POST",
                        url: "requestproduct.php",
                        data: { sortby:$("#sortby").val() }
                    })
                    // Copy the AJAX response in the table
                    .done(function( msg ) {
                        $("#customertd").html(msg);
                    });
            });
        });
    </script>
    <script>
        function deleteconfig() {

            var del = confirm("ARE YOU SURE YOU WANT TO DELETE THIS PRODUCT RECORD ?");
            if (del == true) {
                alert("PRODUCT RECORD DELETED !!!")
            }
            return del;
        }
        function editconfig() {
            var edit = confirm("ARE YOU SURE YOU WANT TO EDIT THIS PRODUCT RECORD ?");
            if (edit == true) {
                alert("TRANSFERRING YOU TO THE EDIT PRODUCT PAGE !!!")
            }
            return edit;
        }
    </script>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
