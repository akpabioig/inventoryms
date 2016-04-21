<?php include('connection.php');

if (isset($_POST['sortsales'])) {
    if ($_POST['sortsales'] == "datesales") {
        $sql = "SELECT  salesitem.sid, salesorder.datesales, addcustomer.customername,
        addproduct.productname, salesitem.itemcost, salesitem.quantity,
        salesitem.tax, salesitem.discount, salesitem.total AS itemtotal, salesorder.totalcost AS ordertotal
        FROM addproduct, salesorder, salesitem, addcustomer
        WHERE salesitem.productid = addproduct.productid
        AND salesorder.customerid = addcustomer.customerid
        AND salesorder.sid = salesitem.sid
        AND salesorder.status = 'fulfilled'
                ORDER BY salesorder.datesales";
    } else if ($_POST['sortsales'] == "customername") {
        $sql = "SELECT  salesitem.sid, salesorder.datesales, addcustomer.customername,
        addproduct.productname, salesitem.itemcost, salesitem.quantity,
        salesitem.tax, salesitem.discount, salesitem.total AS itemtotal, salesorder.totalcost AS ordertotal
        FROM addproduct, salesorder, salesitem, addcustomer
        WHERE salesitem.productid = addproduct.productid
        AND salesorder.customerid = addcustomer.customerid
        AND salesorder.sid = salesitem.sid
        AND salesorder.status = 'fulfilled'
                ORDER BY addcustomer.customername";
    } else if ($_POST['sortsales'] == "productname") {
        $sql = "SELECT  salesitem.sid, salesorder.datesales, addcustomer.customername,
        addproduct.productname, salesitem.itemcost, salesitem.quantity,
        salesitem.tax, salesitem.discount, salesitem.total AS itemtotal, salesorder.totalcost AS ordertotal
        FROM addproduct, salesorder, salesitem, addcustomer
        WHERE salesitem.productid = addproduct.productid
        AND salesorder.customerid = addcustomer.customerid
        AND salesorder.sid = salesitem.sid
        AND salesorder.status = 'fulfilled'
                ORDER BY addproduct.productname";
    } else if ($_POST['sortsales'] == "ordertotal") {
        $sql = "SELECT  salesitem.sid, salesorder.datesales, addcustomer.customername,
        addproduct.productname, salesitem.itemcost, salesitem.quantity,
        salesitem.tax, salesitem.discount, salesitem.total AS itemtotal, salesorder.totalcost AS ordertotal
        FROM addproduct, salesorder, salesitem, addcustomer
        WHERE salesitem.productid = addproduct.productid
        AND salesorder.customerid = addcustomer.customerid
        AND salesorder.sid = salesitem.sid
        AND salesorder.status = 'fulfilled'
                ORDER BY salesorder.totalcost";
    }
} else {
    $sql = "SELECT  salesitem.sid, salesorder.datesales, addcustomer.customername,
        addproduct.productname, salesitem.itemcost, salesitem.quantity,
        salesitem.tax, salesitem.discount, salesitem.total AS itemtotal, salesorder.totalcost AS ordertotal
        FROM addproduct, salesorder, salesitem, addcustomer
        WHERE salesitem.productid = addproduct.productid
        AND salesorder.customerid = addcustomer.customerid
        AND salesorder.sid = salesitem.sid
        AND salesorder.status = 'fulfilled'";
}
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
    while ($row = $result->fetch_array()) {
        echo "
        <tr>
                        <td id = \"sid\" name= \"sid\" class = \"tablefield\" disabled>{$row['sid']}</td>
                        <td id = \"datesales\" name= \"datesales\" class = \"tablefield\" disabled>{$row['datesales']}</td>
                        <td id = \"customername\" name= \"customername\" class = \"tablefield\" disabled>{$row['customername']}</td>
                        <td id = \"productname\" name= \"productname\" class = \"tablefield\" disabled>{$row['productname']}</td>
                        <td id = \"itemcost\" name= \"itemcost\" class = \"tablefield\" disabled> {$row['itemcost']} </td>
                        <td id = \"quantity\" name= \"quantity\" class = \"tablefield\" disabled>{$row['quantity']}</td>
                        <td id = \"tax\" name= \"tax\" class = \"tablefield\" disabled> {$row['tax']} </td>
                        <td id = \"discount\" name= \"discount\" class = \"tablefield\" disabled> {$row['discount']} </td>
                        <td id = \"itemtotal\" name= \"itemtotal\" class = \"tablefield\" disabled>{$row['itemtotal']}</td>
                        <td id = \"ordertotal\" name= \"ordertotal\"  class = \"tablefield\" disabled> {$row['ordertotal']}</td>
                    </tr>
                                ";
    }
} else {
    echo '<option> No Result Found </option>';
}
?>