<?php
include('connection.php');
$SQL = "SELECT addproduct.productid, addproduct.productserialnumber, addproduct.productname, addproduct.productdescription,
                          addsupplier.suppliername, addproduct.locationid, addproduct.initialstockprice, addproduct.wholesaleprice, addproduct.retailprice
                          FROM addproduct, addsupplier
                          WHERE addsupplier.supplierid = addproduct.supplierid
                          ORDER BY productid";
$result = mysqli_query($db, $sql);
$header = '';
//$result = '';
$exportData = mysql_query($SQL) or die ("Sql error : " . mysql_error());

$fields = mysql_num_fields($exportData);

for ($i = 0; $i < $fields; $i++) {
    $header .= mysql_field_name($exportData, $i) . "\t";
}

while ($row = mysql_fetch_row($exportData)) {
    $line = '';
    foreach ($row as $value) {
        if ((!isset($value)) || ($value == "")) {
            $value = "\t";
        } else {
            $value = str_replace('"', '""', $value);
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim($line) . "\n";
}
$result = str_replace("\r", "", $result);

if ($result == "") {
    $result = "\nNo Record(s) Found!\n";
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=export.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";

?>