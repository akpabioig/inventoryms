<?php include('connection.php');

if (isset($_POST['sortby'])) {
    if ($_POST['sortby'] == "productid") {
        $sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productid";
    } else if ($_POST['sortby'] == "productname") {
        $sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productname";
    } else if ($_POST['sortby'] == "locationid") {
        $sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY locationid";
    } else if ($_POST['sortby'] == "suppliername") {
        $sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY suppliername";
    }
} else {
    $sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid";
}
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
    while ($row = $result->fetch_array()) {
        echo "
                    <tr>
                        <td id = \"productid\" name= \"productid\" class = \"tablefield\" disabled>{$row['productid']}</td>
                        <td id = \"productsn\" name= \"productsn\" class = \"tablefield\" disabled>{$row['productserialnumber']}</td>
                        <td id = \"productname\" name= \"productname\" class = \"tablefield\" disabled>{$row['productname']}</td>
                        <td id = \"productdesc\" name= \"productdesc\" class = \"tablefield\" disabled>{$row['productdescription']}</td>
                        <td id = \"suppliername\" name= \"suppliername\" class = \"tablefield\" disabled>{$row['suppliername']}</td>
                        <td id = \"locationid\" name= \"locationid\" class = \"tablefield\" disabled>{$row['locationid']}</td>
                        <td id = \"isp\" name= \"isp\" class = \"tablefield\" disabled>{$row['initialstockprice']}</td>
                        <td id = \"wp\" name= \"wp\"   class = \"tablefield\" disabled>{$row['wholesaleprice']}</td>
                        <td id = \"rp\" name= \"rp\"   class = \"tablefield\" disabled>{$row['retailprice']}</td>
                    </tr>

                                ";
    }
} else {
    echo '<option> No Result Found </option>';
}


?>