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
                    </tr>

                                ";
}
}else{
    echo '<option> No Result Found </option>';
}


?>