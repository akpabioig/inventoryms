<?php include('connection.php');

if (isset($_POST['sortpurchase'])) {
    if ($_POST['sortpurchase'] == "datepurchase") {
        $sql = "SELECT  purchaseitem.purchaseid, purchaseorder.datepurchase, addsupplier.suppliername,
                addproduct.productname, purchaseitem.itemcost, purchaseitem.quantity,
                purchaseitem.tax, purchaseitem.total AS itemtotal, purchaseorder.total AS ordertotal
                FROM addproduct, purchaseorder, purchaseitem, addsupplier
                WHERE purchaseitem.productid = addproduct.productid
                AND purchaseorder.supplierid = addsupplier.supplierid
                AND purchaseorder.purchaseid = purchaseitem.purchaseid
                AND purchaseorder.status = 'fulfilled'
                ORDER BY purchaseorder.datepurchase";
    } else if ($_POST['sortpurchase'] == "suppliername") {
        $sql = "SELECT  purchaseitem.purchaseid, purchaseorder.datepurchase, addsupplier.suppliername,
                addproduct.productname, purchaseitem.itemcost, purchaseitem.quantity,
                purchaseitem.tax, purchaseitem.total AS itemtotal, purchaseorder.total AS ordertotal
                FROM addproduct, purchaseorder, purchaseitem, addsupplier
                WHERE purchaseitem.productid = addproduct.productid
                AND purchaseorder.supplierid = addsupplier.supplierid
                AND purchaseorder.purchaseid = purchaseitem.purchaseid
                AND purchaseorder.status = 'fulfilled'
                ORDER BY addsupplier.suppliername";
    } else if ($_POST['sortpurchase'] == "productname") {
        $sql = "SELECT  purchaseitem.purchaseid, purchaseorder.datepurchase, addsupplier.suppliername,
                addproduct.productname, purchaseitem.itemcost, purchaseitem.quantity,
                purchaseitem.tax, purchaseitem.total AS itemtotal, purchaseorder.total AS ordertotal
                FROM addproduct, purchaseorder, purchaseitem, addsupplier
                WHERE purchaseitem.productid = addproduct.productid
                AND purchaseorder.supplierid = addsupplier.supplierid
                AND purchaseorder.purchaseid = purchaseitem.purchaseid
                ORDER BY itemtotal";
    } else if ($_POST['sortpurchase'] == "ordertotal") {
        $sql = "SELECT  purchaseitem.purchaseid, purchaseorder.datepurchase, addsupplier.suppliername,
                addproduct.productname, purchaseitem.itemcost, purchaseitem.quantity,
                purchaseitem.tax, purchaseitem.total AS itemtotal, purchaseorder.total AS ordertotal
                FROM addproduct, purchaseorder, purchaseitem, addsupplier
                WHERE purchaseitem.productid = addproduct.productid
                AND purchaseorder.supplierid = addsupplier.supplierid
                AND purchaseorder.purchaseid = purchaseitem.purchaseid
                ORDER BY ordertotal";
    }
} else {
    $sql = "SELECT  purchaseitem.purchaseid, purchaseorder.datepurchase, addsupplier.suppliername,
            addproduct.productname, purchaseitem.itemcost, purchaseitem.quantity,
            purchaseitem.tax, purchaseitem.total AS itemtotal, purchaseorder.total AS ordertotal
            FROM addproduct, purchaseorder, purchaseitem, addsupplier
            WHERE purchaseitem.productid = addproduct.productid
            AND purchaseorder.supplierid = addsupplier.supplierid
            AND purchaseorder.purchaseid = purchaseitem.purchaseid
            AND purchaseorder.status = 'fulfilled'";
}
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
    while ($row = $result->fetch_array()) {
        echo "
        <tr>
                        <td id = \"purchaseid\" name= \"purchaseid\" class = \"tablefield\" disabled>{$row['purchaseid']}</td>
                        <td id = \"datepurchase\" name= \"datepurchase\" class = \"tablefield\" disabled>{$row['datepurchase']}</td>
                        <td id = \"suppliername\" name= \"suppliername\" class = \"tablefield\" disabled>{$row['suppliername']}</td>
                        <td id = \"productname\" name= \"productname\" class = \"tablefield\" disabled>{$row['productname']}</td>
                        <td id = \"itemcost\" name= \"itemcost\" class = \"tablefield\" disabled> {$row['itemcost']} </td>
                        <td id = \"quantity\" name= \"quantity\" class = \"tablefield\" disabled>{$row['quantity']}</td>
                        <td id = \"tax\" name= \"tax\" class = \"tablefield\" disabled> {$row['tax']} </td>
                        <td id = \"itemtotal\" name= \"itemtotal\" class = \"tablefield\" disabled>{$row['itemtotal']}</td>
                        <td id = \"ordertotal\" name= \"ordertotal\"  class = \"tablefield\" disabled> {$row['ordertotal']}</td>
                    </tr>
                                ";
    }
} else {
    echo '<option> No Result Found </option>';
}
?>