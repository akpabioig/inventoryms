<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include('connection.php');
$sql = "SELECT customerid, customertype, customername, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addcustomer";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CUSTOMERS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href = "styling.css"/>
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
        <h3>CUSTOMERS</h3>
        <img src= "images/cust.png" style{height="250" width="200"}/>
        <h2> EDIT CUSTOMER ENTRIES </h2>
        <p> SCROLL TO THE END OF THE RECORD AND CLICK THE EDIT ICON </p>
        <form method="get" action="customerseditor.php"">
        <div id = "form3">
            <select name="sortcustomer" id="sortcustomer">
                <option selected disabled> ORDER BY</option>
                <option value="customerid"> CUSTOMER ID</option>
                <option value="customertype"> CUSTOMER TYPE</option>
                <option value="customername"> CUSTOMER NAME</option>
                <option value="country"> CUSTOMER COUNTRY</option>
            </select>
            <table id="t2">
                <tr>
                    <th> ID </th>
                    <th> Type </th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Fax</th>
                    <th>Email</th>
                    <th>Website </th>
                    <th>Description </th>
                    <th>Address Line 1 </th>
                    <th>Address Line 2</th>
                    <th>Town </th>
                    <th>County</th>
                    <th>Postcode</th>
                    <th>Country</th>
                </tr>
                <tbody id="customertd">
                <?php
                if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){
                    while($row = $result -> fetch_array()){
                        echo "
                                <tr>
                        <td><input type=\"text\" id = \"customerid\" name= \"customerid\"  value = \"{$row['customerid']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"customertype\" name= \"customertype\"  value = \"{$row['customertype']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"customername\" name= \"customername\"  value = \"{$row['customername']}\" class = \"tablefield\" disabled></td>

                        <td><input type=\"text\" id = \"telnumber\" name= \"telnumber\"  value = \"{$row['telnumber']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"fax\" name= \"fax\"  value = \"{$row['fax']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"email\" name= \"email\"  value = \"{$row['email']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"url\" name= \"url\"  value = \"{$row['url']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"description\" name= \"description\"  value = \"{$row['description']}\" class = \"tablefield\" disabled></td>

                        <td><input type=\"text\" id = \"addressline1\" name= \"addressline1\"  value = \"{$row['addressline1']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"addressline2\" name= \"addressline2\"  value = \"{$row['addressline2']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"town\" name= \"town\"  value = \"{$row['town']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"county\" name= \"county\"  value = \"{$row['county']}\" class = \"tablefield\" disabled></td>

                        <td><input type=\"text\" id = \"postcode\" name= \"postcode\"  value = \"{$row['postcode']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"country\" name= \"country\"  value = \"{$row['country']}\" class = \"tablefield\" disabled></td>
                        <td><a href='edit-customer.php?custid={$row['customerid']}' onclick='return editconfig()'><img src = 'images/edit.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deletecustomer.php?custid={$row['customerid']}' onclick='return deleteconfig()'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
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
        $(document).ready(function () {
            // Each time you change your sort list, send AJAX request
            $("#sortcustomer").change(function () {
                $.ajax({
                        method: "POST",
                        url: "requestcustomer.php",
                        data: {sortcustomer: $("#sortcustomer").val()}
                    })
                    // Copy the AJAX response in the table
                    .done(function (msg) {
                        $("#customertd").html(msg);
                    });
            });
        });
    </script>
    <script>
        function deleteconfig() {

            var del = confirm("ARE YOU SURE YOU WANT TO DELETE THIS CUSTOMER RECORD ?");
            if (del == true) {
                alert("CUSTOMER RECORD DELETED !!!")
            }
            return del;
        }
        function editconfig() {
            var edit = confirm("ARE YOU SURE YOU WANT TO EDIT THIS CUSTOMER RECORD ?");
            if (edit == true) {
                alert("TRANSFERRING YOU TO THE EDIT CUSTOMER PAGE !!!")
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
