<?php include('connection.php');

if(isset($_POST['sortby'])) {
    if($_POST['sortby'] == "productid") {
        $sql= "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productid";
    } else if($_POST['sortby'] == "productname") {
        $sql= "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productname";
    } else if($_POST['sortby'] == "locationid") {
        $sql= "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY locationid";
    }else if($_POST['sortby'] == "suppliername") {
        $sql= "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY suppliername";
    }
} else {
    $sql= "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid";
}
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){
while($row = $result -> fetch_array()) {
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
                        <td><a href='edit-product.php?prodid={$row['productid']}'><img src = 'images/edit.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deleteproduct.php?prodid={$row['productid']}'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
                    </tr>

                                ";
}
}else{
    echo '<option> No Result Found </option>';
}
?>

<?php

if(isset($_POST['sortbysupp'])) {
if($_POST['sortbysupp'] == "supplierid") {
    $sql = "SELECT supplierid, suppliername, contactperson, contactpersontel, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addsupplier
                          ORDER BY supplierid";
}else if($_POST['sortby'] == "suppliername") {
    $sql = "SELECT supplierid, suppliername, contactperson, contactpersontel, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addsupplier
                          ORDER BY suppliername";
}
} else {
    $sql = "SELECT supplierid, suppliername, contactperson, contactpersontel, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addsupplier";
} $result = mysqli_query($db, $sql);
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
