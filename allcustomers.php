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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a id="logout" href="logout.php"><input type = "button" value = "LOG OUT"/></a>
    </header>
    <section>
        <h3>CUSTOMERS</h3>
        <img src= "images/cust.png" style{height="250" width="200"}/>
        <h2> LIST OF CUSTOMERS </h2>
        <p> FIND BELOW THE LIST OF ALL CUSTOMERS </p>
        <form method="get" action="customerseditor.php"">
        <div id = "form3">
            <select name="sortcustomer" id="sortcustomer">
                <option selected disabled> ORDER BY</option>
                <option value="customerid"> CUSTOMER ID</option>
                <option value="customertype"> CUSTOMER TYPE</option>
                <option value="customername"> CUSTOMER NAME</option>
                <option value="country"> CUSTOMER COUNTRY</option>
            </select>
            <button id="export"> Export To Excel Sheet</button>
            <div id="customertable">
                <table>
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
                        <td id = \"customerid\" name= \"customerid\" class = \"tablefield\" disabled>{$row['customerid']}</td>
                        <td id = \"customertype\" name= \"customertype\" class = \"tablefield\" disabled>{$row['customertype']}</td>
                        <td id = \"customername\" name= \"customername\" class = \"tablefield\" disabled>{$row['customername']}</td>
                        <td id = \"telnumber\" name= \"telnumber\" class = \"tablefield\" disabled>{$row['telnumber']}</td>
                        <td id = \"fax\" name= \"fax\" class = \"tablefield\" disabled>{$row['fax']}</td>
                        <td id = \"email\" name= \"email\" class = \"tablefield\" disabled>{$row['email']}</td>
                        <td id = \"url\" name= \"url\" class = \"tablefield\" disabled>{$row['url']}</td>
                        <td id = \"description\" name= \"description\" class = \"tablefield\" disabled>{$row['description']}</td>

                        <td id = \"addressline1\" name= \"addressline1\" class = \"tablefield\" disabled>{$row['addressline1']}</td>
                        <td id = \"addressline2\" name= \"addressline2\" class = \"tablefield\" disabled>{$row['addressline2']}</td>
                        <td id = \"town\" name= \"town\"  class = \"tablefield\" disabled>{$row['town']}</td>
                        <td id = \"county\" name= \"county\" class = \"tablefield\" disabled>{$row['county']}</td>

                        <td id = \"postcode\" name= \"postcode\" class = \"tablefield\" disabled>{$row['postcode']}</td>
                        <td id = \"country\" name= \"country\" class = \"tablefield\" disabled>{$row['country']}</td>
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
        </div>
        </form>
    </section>
    <script>
        $(document).ready(function () {
            // Each time you change your sort list, send AJAX request
            $("#sortcustomer").change(function () {
                $.ajax({
                        method: "POST",
                        url: "requestcustomer1.php",
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
                var table_div = document.getElementById('customertable');
                var table_html = table_div.outerHTML.replace(/ /g, '%20');
                a.href = data_type + ', ' + table_html;
                //setting the file name
                a.download = 'Customer_Inventory_' + postfix + '.xls';
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
