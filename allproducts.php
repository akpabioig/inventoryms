<?php
/*session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}*/

include('connection.php');
$sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productid";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRODUCTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="scripting.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="jquery.tabletoCSV.js"></script>


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
        <h3>PRODUCTS</h3>
        <img src= "images/product.png" style{height="250" width="200"}/>
        <h2>LIST OF PRODUCTS </h2>
        <p>FIND BELOW THE LIST OF ALL PRODUCTS ADDED TO THE WAREHOUSES </p>
        <form method="get">
        <div id = "form3">
            <select name="sortby" id="sortby">
                <option selected disabled> ORDER BY</option>
                <option value="productid"> PRODUCT ID</option>
                <option value="productname"> PRODUCT NAME</option>
                <option value="locationid"> PRODUCT LOCATION</option>
                <option value="suppliername"> SUPPLIER NAME</option>
            </select>
            <button class="export">Export</button>
            <div id="dvData">
                <table>
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
                <tbody id="t2">
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
            $("#sortby").change(function () {
                $.ajax({
                        method: "POST",
                        url: "requestproduct1.php",
                        data: {sortby: $("#sortby").val()}
                    })
                    // Copy the AJAX response in the table
                    .done(function (msg) {
                        $("#t2").html(msg);
                    });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            function exportTableToCSV($table, filename) {
                var $rows = $table.find('tr:has(td)'),
                    tmpColDelim = String.fromCharCode(11),
                    tmpRowDelim = String.fromCharCode(0),
                    colDelim = '","',
                    rowDelim = '"\r\n"',
                    csv = '"' + $rows.map(function (i, row) {
                            var $row = $(row),
                                $cols = $row.find('td');
                            return $cols.map(function (j, col) {
                                var $col = $(col),
                                    text = $col.text();
                                return text.replace(/"/g, '""');
                            }).get().join(tmpColDelim);
                        }).get().join(tmpRowDelim)
                            .split(tmpRowDelim).join(rowDelim)
                            .split(tmpColDelim).join(colDelim) + '"',
                    csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);
                $(this)
                    .attr({
                        'download': filename,
                        'href': csvData,
                        'target': '_blank'
                    });
            }
            $(".export").on('click', function (event) {
                exportTableToCSV.apply(this, [$('#dvData>table'), 'export.csv']);
            });
        });
        /*$(document).ready(function () {
            $("#btnExport").click(function (e) {
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
                a.download = 'exported_table_' + postfix + '.xls';
                //triggering the function
                a.click();
                //just in case, prevent default behaviour
                e.preventDefault();
            });
         });*/
    </script>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
