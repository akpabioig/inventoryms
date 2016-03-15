<?php include('postcode.php');  ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ADD CUSTOMER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href = "styling.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <script type = "text/javascript" src="scripting.js"></script>
    </head>


    <script type="application/javascript">
        $.ajax({
            type: "POST",
            url: 'https://api.getaddress.io/v2/uk/ab115be?api-key=I8Gx__79p0W0NH8oxnp_xw3587',
            data: {'categoryID': $("#cpostc").val(),'isAjax':true},
            dataType:'json',
            success: function(data) {

                var select = $("#select"), options = '';
                select.emptys();

                for(var i=0;i<data.length; i++)
                {
                    options += "<option value='"+data[i].id+"'>"+ data[i].name +"</option>";
                }

                select.append(options);
            }
        });
    </script>
<body>
<nav class="w3-sidenav w3-black" style="width:102px">
    <a class="w3-padding-16" href="homepage.html"><i class="fa fa-home w3-xxlarge"></i> <br>HOME </a>
    <a class="w3-padding-16" href="#"><i class="fa fa-search w3-xlarge"></i> <br>SEARCH</a>
    <a class="w3-padding-16" href="addproduct.html"><i class="fa fa-plus-square w3-xlarge"></i> <br>ADD PRODUCT</a>
    <a class="w3-padding-16" href="addcustomer.php"><i class="fa fa-users w3-xlarge"></i> <br>ADD CUSTOMER</a>
    <a class="w3-padding-16" href="newsales.html"><i class="fa fa-dollar w3-xlarge"></i><br>SALES ORDER</a>
    <a class="w3-padding-16" href="newpurchase.html"><i class="fa fa-shopping-cart w3-xlarge"></i>PURCHASE ORDER</a>
    <a class="w3-padding-16" href="addvendor.html"><i class="fa fa-truck w3-xlarge"></i><br>ADD SUPPLIER</a>
    <a class="w3-padding-16" href="location.html"><i class="fa fa-map-marker w3-xlarge"></i><br>LOCATION</a>
</nav>
<div style="margin-left:70px">
    <header>
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
    </header>
    <section>
        <h3>ADD CUSTOMER</h3>
        <img src= "images/cust.png" style{height="250" width="200"}/>
        <h2>Customer Details</h2>
        <p>Insert the details of the new customer to be added to the inventory list</p>
        <p>Be careful to fill out compulsory fields indicated by the "*" key</p>
        <form method="post" action="customer.php">
            <div id = "form1">
                <table>
                    <tr>
                        <td label for="custtype"> <a id = "hash">*</a> Customer Type : </td>
                        <td>
                            <select class = "formfield" name = "type">
                                <option selected disabled>SELECT</option>
                                <option value = "Company">COMPANY</option>
                                <option value = "Individual">INDIVIDUAL</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td label for="custn"> <a id = "hash">*</a> Customer Name : </td>
                        <td><input type="text" id="custn" name="custn" value="" class = "formfield" rows = 1 required></td>
                        <td label for ="custc"> Customer Code : </td>
                        <td><input type="text" id = "custc" name= "custc"  value = "" class = "formfield" rows = 1></td>
                    </tr>
                    <tr>
                        <td label for ="custtel"> <a id = "hash">*</a> Tel Number : </td>
                        <td><input type="text" id = "custtel" name= "custtel"  value = "" class = "formfield" rows = 1 required></td>
                        <td label for ="custfax"> Fax: </td>
                        <td><input type="text" id = "custfax" name= "custfax"  value = "" class = "formfield" rows = 1 ></td>
                    </tr>
                    <tr>
                        <td label for ="custurl"> Website URL : </td>
                        <td><input type="url" id = "custurl" name= "custurl"  value = "" class = "formfield" rows = 1 ></td>
                        <td label for ="custemail"> <a id = "hash">*</a> Customer Email Address : </td>
                        <td><input type="email" id = "custemail" name= "custemail"  value = "" class = "formfield" rows = 1 required></td>
                    </tr>
                    <tr>
                        <td label for ="desc"> Description : </td>
                        <td><textarea id = "desc" name= "desc"  value = "" class = "formfield" rows = 5 cols = 30 value = ""></textarea></td>
                </table>
            </div>
            <h2>Customer Address </h2>
            <p> Insert details of the address of the Customer </p>
            <div  id = "form2">
                <table>
                    <tr>
                        <td label for="custadd1"></td>
                        <td><input type="text" id="addApi" name="addApi" value="" class = "formfield" rows = 1  placeholder="Type your Postcode"></td>
                        <td><input type="submit" id="cu" name="cu" value="Find address" class = "formfield" rows = 1></td>
                        <td label for ="custadd2"> <select class = "formfiel"><?php
                                foreach($json2 as $data){
                                    echo '<option>'.$data.'</option>';
                                }

                                ?>
                            </select>/select></td>
                    </tr>
                    <tr>
                        <td label for="custadd1"> <a id = "hash">*</a> Address Line 1 : </td>
                        <td><input type="text" id="custadd1" name="custadd1" value="" class = "formfield" rows = 1></td>
                        <td label for ="custadd2"> Address Line 2 : </td>
                        <td><input type="text" id="custadd2" name="custadd2" value="" class = "formfield" rows = 1></td>
                    </tr>
                    <tr>
                        <td label for="ctown"> <a id = "hash">*</a> Town/City : </td>
                        <td><input type="text" id="ctown" name="ctown" value="" class = "formfield" rows = 1></td>
                        <td label for ="ccounty"> County : </td>
                        <td><input type="text" id="ccounty" name="ccounty" value="" class = "formfield" rows = 1></td>
                    </tr>
                    <tr>
                        <td label for="cpostc"> <a id = "hash">*</a> Postcode : </td>
                        <td><input type="text" id="cpostc" name="cpostc" value="" class = "formfield" rows = 1 cols = 5></td>
                        <td label for ="ccountry"> <a id = "hash">*</a> Country : </td>
                        <td><input type="text" id="ccountry" name="ccountry" value="" class = "formfield" rows = 1></td>
                    </tr>
                    </table>
            </div>
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
<?php
