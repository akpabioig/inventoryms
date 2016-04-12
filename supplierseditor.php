<?php include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SUPPLIERS</title>
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
        <h3>SUPPLIERS</h3>
        <img src= "images/supp.png" style{height="250" width="200"}/>
        <h2>EDIT SUPPLIER RECORDS</h2>
        <p>SCROLL TO THE END OF THE RECORD AND CLICK THE EDIT ICON </p>
        <form method="get" action="supplierseditor.php">
        <div id = "form3">
            <p>Work</p>
            <select name = "sortbysupp" id="sortbysupp" class ="form-control">
                <option selected disabled> ORDER BY </option>
                <option value = "supplierid"> SUPPLIER ID </option>
                <option value = "suppliername"> SUPPLIER NAME </option>
            </select>
            <table>
                <tr>
                    <th> ID </th>
                    <th> Name </th>
                    <th>Contact Person</th>
                    <th>Contact Person Phone Number </th>
                    <th>Phone Number</th>
                    <th>Fax</th>
                    <th>Email </th>
                    <th>Website</th>
                    <th>Description </th>
                    <th>Address Line 1 </th>
                    <th>Address Line 2</th>
                    <th>Town </th>
                    <th>County</th>
                    <th>Postcode</th>
                    <th>Country</th>
                </tr>
                <?php

                $sql= "SELECT supplierid, suppliername, contactperson, contactpersontel, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addsupplier";
                $result = mysqli_query($db, $sql);
                if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                    while($row = $result -> fetch_array()){
                        echo "
               <tbody id = \"t3\">

                                <tr>
                        <td><input type=\"text\" id = \"supplierid\" name= \"supplierid\"  value = \"{$row['supplierid']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"suppliername\" name= \"suppliername\"  value = \"{$row['suppliername']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"contactperson\" name= \"contactperson\"  value = \"{$row['contactperson']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"contactpersontel\" name= \"contactpersontel\"  value = \"{$row['contactpersontel']}\" class = \"tablefield\" disabled></td>

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
                        <td><a href='edit-supplier.php?suppid={$row['supplierid']}'><img src = 'images/edit.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deletesupplier.php?suppid={$row['supplierid']}'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
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
            $("#sortbysupp").change(function(){
                $.ajax({
                        method: "POST",
                        url: "requestsupplier.php",
                        data: { sortbysupp:$("#sortbysupp").val() }
                    })
                    // Copy the AJAX response in the table
                    .done(function( msg ) {
                        $("#t3").html(msg);
                    });
            });
        });
    </script>
</div>
<footer>
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
