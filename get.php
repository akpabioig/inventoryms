<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 19/03/2016
 * Time: 13:44
 */

include('connection.php');

$sql = "SELECT productid, productname, locationid, retailprice FROM addproduct";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

    while($row = $result -> fetch_array()) {
        echo '<option value="' . $row['productid'] . '">';
        echo $row['productname'];
        echo '</option>';

        echo '<script type="application/javascript">';
        echo 'var price = ' . json_encode($row['retailprice']) . ';';
        echo 'var locid = ' . json_encode($row['locationid']) . ';';
        echo '</script>';
    }
}else{
    echo '<option> No Result Found </option>';
}

?>