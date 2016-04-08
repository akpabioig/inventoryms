<?php include('connection.php');
if(isset($_GET['custid'])){
    $customerId = $_GET['custid'];
    $sqlselect = "SELECT * FROM addcustomer WHERE customerid = $customerId";
    $getResult = mysqli_query($db, $sqlselect);

    while($selectRow = $getResult -> fetch_array()){
        $getcustomertype = $selectRow['customertype'];
        $getcustomername = $selectRow['customername'];
        $telnumber = $selectRow['telnumber'];
        $fax = $selectRow['fax'];
        $email = $selectRow['email'];
        $url = $selectRow['url'];
        $description = $selectRow['description'];
        $addressline1 = $selectRow['addressline1'];
        $addressline2 = $selectRow['addressline2'];
        $town = $selectRow['town'];
        $county = $selectRow['county'];
        $postcode = $selectRow['postcode'];
        $country = $selectRow['country'];
    }
}else{
    header("Location: customerseditor.php?f=1");
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> EDIT CUSTOMER RECORDS </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href = "styling.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <script type = "text/javascript" src="scripting.js"></script>
    </head>


    <script type="application/javascript">
        function ps(){
            $(document).ready(function() {
                $("#addApi").click(function(){
                    $.ajax({
                        url: 'ajax.php', //This is the current doc
                        type: "POST",
                        data: ({name: 145}),
                        success: function(data){
                            console.log(data);
                        }
                    });
                    $.ajax({
                        url:'ajax.php',
                        data:"",
                        dataType:'json',
                        success:function(data1){
                            var y1=data1;
                            console.log(data1);
                        }
                    });

                });
            });
        }

    </script>
    <body>
    <nav class="w3-sidenav w3-black" style="width:102px">
        <a class="w3-padding-16" href="homepage.php"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
        <a class="w3-padding-16" href="#"><i class="fa fa-search w3-xlarge"></i> <br>SEARCH</a>
        <a class="w3-padding-16" href="addproduct.php"><i class="fa fa-plus-square w3-xlarge"></i> <br>ADD PRODUCT</a>
        <a class="w3-padding-16" href="addcustomer.php"><i class="fa fa-users w3-xlarge"></i> <br>ADD CUSTOMER</a>
        <a class="w3-padding-16" href="newsales.php"><i class="fa fa-dollar w3-xlarge"></i><br>SALES ORDER</a>
        <a class="w3-padding-16" href="newpurchase.php"><i class="fa fa-shopping-cart w3-xlarge"></i>PURCHASE ORDER</a>
        <a class="w3-padding-16" href="addvendor.php"><i class="fa fa-truck w3-xlarge"></i><br>ADD SUPPLIER</a>
        <a class="w3-padding-16" href="location.php"><i class="fa fa-map-marker w3-xlarge"></i><br>LOCATION</a>
    </nav>
    <div style="margin-left:70px">
        <header>
            <h1> RGU Oil Services </h1>
            <h2> Inventory Management Made Easy </h2>
        </header>
        <section>
            <h3>EDIT CUSTOMER RECORDS</h3>
            <img src= "images/cust.png" style{height="250" width="200"}/>
            <h2>Customer Details</h2>
            <p> Edit Record of Customer already added to the Inventory list </p>
            <p>Be careful to fill out compulsory fields indicated by the "*" key</p>
            <form method="post" action="updatecustomer.php">
                <div id = "form1">
                    <table>
                        <tr>
                            <td label for="custtype"> <a id = "hash">*</a> Customer Type : </td>
                            <td>
                                <select class = "formfield" name = "type" value="<?php echo $getcustomertype; ?>">
                                    <option selected disabled>SELECT</option>
                                    <option <?php if($getcustomertype == 'Company'){echo 'selected';} ?> value = "Company">COMPANY</option>
                                    <option <?php if($getcustomertype == 'Individual'){echo 'selected';} ?>value = "Individual">INDIVIDUAL</option>
                                </select>
                            </td>
                            <td label for="custn"> <a id = "hash">*</a> Customer Name : </td>
                            <td><input type="text" id="custn" name="custn" class = "formfield" rows = 1 required value="<?php echo $getcustomername; ?>"></td>
                        </tr>
                        <tr>
                            <td label for ="custtel"> <a id = "hash">*</a> Tel Number : </td>
                            <td><input type="text" id = "custtel" name= "custtel" class = "formfield" rows = 1 required value="<?php echo $telnumber; ?>"></td>
                            <td label for ="custfax"> Fax: </td>
                            <td><input type="text" id = "custfax" name= "custfax" class = "formfield" rows = 1 value="<?php echo $fax; ?>"></td>
                        </tr>
                        <tr>
                            <td label for ="custurl"> Website URL : </td>
                            <td><input type="url" id = "custurl" name= "custurl" class = "formfield" rows = 1 value="<?php echo $url; ?>"></td>
                            <td label for ="custemail"> <a id = "hash">*</a> Customer Email Address : </td>
                            <td><input type="email" id = "custemail" name= "custemail" class = "formfield" rows = 1 required value="<?php echo $email; ?>"></td>
                        </tr>
                        <tr>
                            <td label for ="desc"> Description : </td>
                            <td><textarea id = "desc" name= "desc" class = "formfield" rows = 5 cols = 30> <?php echo $description; ?> </textarea></td>
                    </table>
                </div>
                <h2>Customer Address </h2>
                <p> Insert details of the address of the Customer </p>
                <div  id = "form2">
                    <table>
                        <tr>
                            <td label for="custadd1"></td>
                            <td><input type="text" id="addApi" name="addApi" value="" class = "formfield" rows = 1  placeholder="Type your Postcode"></td>
                            <td><input type="submit" id="cu" name="cu" value="Find address" class = "formfield" rows = 1 onclick="ps();"></td>
                            <td label for ="custadd2"> <select class = "formfield"><?php
                                    foreach($json2 as $data){
                                        echo '<option>'.$data.'</option>';
                                    }

                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td label for="custadd1"> <a id = "hash">*</a> Address Line 1 : </td>
                            <td><input type="text" id="custadd1" name="custadd1" class = "formfield" rows = 1 value="<?php echo $addressline1; ?>"></td>
                            <td label for ="custadd2"> Address Line 2 : </td>
                            <td><input type="text" id="custadd2" name="custadd2" class = "formfield" rows = 1 value="<?php echo $addressline2; ?>"></td>
                        </tr>
                        <tr>
                            <td label for="ctown"> <a id = "hash">*</a> Town/City : </td>
                            <td><input type="text" id="ctown" name="ctown" class = "formfield" rows = 1 value="<?php echo $town; ?>"></td>
                            <td label for ="ccounty"> County : </td>
                            <td><input type="text" id="ccounty" name="ccounty" class = "formfield" rows = 1 value="<?php echo $county; ?>"></td>
                        </tr>
                        <tr>
                            <td label for="cpostc"> <a id = "hash">*</a> Postcode : </td>
                            <td><input type="text" id="cpostc" name="cpostc" class = "formfield" rows = 1 cols = 5 value="<?php echo $postcode; ?>"></td>
                            <td label for ="ccountry"> <a id = "hash">*</a> Country : </td>
                            <td><input type="text" id="ccountry" name="ccountry" class = "formfield" rows = 1 value="<?php echo $country; ?>"></td>
                        </tr>
                    </table>
                    <input type = "hidden" id="custid" name="custid" value = "<?php echo $customerId; ?>"/>
                </div>
                <p id = "subbutt"><input type = "reset" value = "CLEAR">
                    &nbsp; &nbsp; <input type = "submit" value = "UPDATE"></p>
            </form>
        </section>
    </div>
    <footer>
        <p>&copy; Akpabio Ignatius, 2016</p>
    </footer>
    </body>
    </html>
<?php

