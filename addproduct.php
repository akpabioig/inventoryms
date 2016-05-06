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
    <title>ADD PRODUCT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="scripting.js"></script>
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
    <button id="logout" href="logout.php">LOG OUT</button>
</header>
<section>
    <h3>ADD PRODUCT</h3>
    <img src= "images/product.png" style{height="250" width="200"}/>
    <h2>Product Details</h2>
    <p>Insert the details of the new product to be added to the inventory list</p>
    <p>Be careful to fill out compulsory fields indicated by the "<a id="hash">*</a>" key</p>
    <form method="post" action="process.php" onsubmit="return validateproductForm()">
        <div id = "form1">
        <table>
            <tr>
                <td label for="pnum"> <a id = "hash">*</a> Product Serial Number : </td>
                <td><input type="text" id="pnum" name="pnum" class = "formfield" placeholder="E.g. BNG9084786" required></td>
                <td label for ="supplier"> Supplier : </td>
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
            </tr>
            <tr>
                <td label for ="pname"> <a id = "hash">*</a> Product Name : </td>
                <td><input type="text" id = "pname" name= "pname" class = "formfield" placeholder="E.g. Marine Riser" required></td>
            </tr>
            <tr>
                <td label for ="desc"> Product Description : </td>
                <td><textarea id = "desc" name= "desc" class = "formfield" rows=5 cols=50 placeholder="E.g. Offshore"></textarea></td>
            </tr>
            <tr>
                <td label for ="locn"> <a id = "hash">*</a> Location Code : </td>
                <td>
                    <select name = "loccode" required>
                        <option selected disabled>SELECT</option>
                        <option value = "WH Location A1">WH Location A1</option>
                        <option value = "WH Location A2">WH Location A2</option>
                        <option value="WH Location A3">WH Location A3</option>
                        <option value = "WH Location A4">WH Location A4</option>
                        <option value = "WH Location B1">WH Location B1</option>
                        <option value="WH Location B2">WH Location B2</option>
                        <option value = "WH Location B3">WH Location B3</option>
                        <option value = "WH Location B4">WH Location B4</option>
                        <option value="WH Location C1">WH Location C1</option>
                        <option value = "WH Location C2">WH Location C2</option>
                        <option value = "WH Location C3">WH Location C3</option>
                        <option value="WH Location C4">WH Location C4</option>
                        <option value = "WH Location D1">WH Location D1</option>
                        <option value = "WH Location D2">WH Location D2</option>
                        <option value="WH Location D3">WH Location D3</option>
                        <option value = "WH Location D4">WH Location D4</option>
                        <option value = "Yard 1">Yard 1</option>
                        <option value="Yard 2">Yard 2</option>
                    </select>
                </td>
            </tr>
        </table>
            </div>
        <h2>Initial Values</h2>
        <p> Insert the Initial Stock levels and values for cost price and selling price of the product</p>
        <div  id = "form2">
        <table>
            <tr>
                <td label for ="isp"> <a id = "hash">*</a> Initial Stock Price:</td>
                <td><input type="number" id="isp" name="isp" class = "formfield" required placeholder="Pounds" /></td>
            </tr>
           <tr>
               <td label for="wp"> <a id = "hash">*</a> Wholesale Price : </td>
               <td><input type="number" id="wp" name="wp" class = "formfield" required placeholder="Pounds" /></td>
               <td label for ="isp"> <a id = "hash">*</a> Retail Price: </td>
               <td><input type="number" id="rp" name="rp" class = "formfield" required placeholder="Pounds" /></td>
            </tr>
        </table>
            </div>
        <?php
        $productidquery = "SELECT max(productid) FROM addproduct";
        $r = mysqli_query($db, $productidquery);
        while ($row = $r->fetch_array()) {
            $prodid = $row['0'];
        }
        $prodid += 10;
        ?>
        <input type="hidden" value="<?php echo $prodid; ?>" name="prodid" id="prodid"/>
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
