<?php include('connection.php');

if (isset($_POST['sortlocation'])) {
    if ($_POST['sortlocation'] == "productid") {
        $sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productid";
    } else if ($_POST['sortlocation'] == "productname") {
        $sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productname";
    } else if ($_POST['sortlocation'] == "locationid") {
        $sql = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY locationid";
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
                        <td><input type=\"text\" id = \"productid\" name= \"productid\" class = \"tablefield\" disabled>{$row['productid']}</td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\" class = \"tablefield\" disabled>{$row['productname']}</td>
                        <td><input type=\"text\" id = \"locationid\" name= \"locationid\" class = \"tablefield\" disabled>{$row['locationid']}</td>
                    </tr>

                                ";
        }
    } else {
        echo '<option> No Result Found </option>';
    }

}
?>