<?php include('connection.php');

if (isset($_POST['sortcustomer'])) {
    if ($_POST['sortcustomer'] == "customerid") {
        $sql = "SELECT customerid, customertype, customername, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addcustomer
                          ORDER BY customerid";
    } else if ($_POST['sortcustomer'] == "customertype") {
        $sql = "SELECT customerid, customertype, customername, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addcustomer
                          ORDER BY customertype";
    } else if ($_POST['sortcustomer'] == "customername") {
        $sql = "SELECT customerid, customertype, customername, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addcustomer
                          ORDER BY customername";
    } else if ($_POST['sortcustomer'] == "country") {
        $sql = "SELECT customerid, customertype, customername, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addcustomer
                          ORDER BY country";
    }
} else {
    $sql = "SELECT customerid, customertype, customername, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addcustomer";
}
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
    while ($row = $result->fetch_array()) {
        echo "
                                <tr>
                        <td id = \"customerid\" name= \"customerid\" class = \"tablefield\" disabled>{$row['customerid']}</td>
                        <td id = \"customertype\" name= \"customertype\" class = \"tablefield\" disabled>{$row['customertype']}</td>
                        <td id = \"customername\" name= \"customername\" class = \"tablefield\" disabled>{$row['customername']}</td>
                        <td id = \"telnumber\" name= \"telnumber\" class = \"tablefield\" disabled>{$row['telnumber']}</td>
                        <td id = \"fax\" name= \"fax\" class = \"tablefield\" disabled>{$row['fax']}</td>
                        <td id = \"email\" name= \"email\" class = \"tablefield\" disabled>{$row['email']}</td>
                        <td id = \"url\" name= \"url\" class = \"tablefield\" disabled>{$row['url']}</td>
                        <td id = \"description\" name= \"description\" class = \"tablefield\" disabled>{$row['description']}</td>

                        <td id = \"addressline1\" name= \"addressline1\" class = \"tablefield\" disabled>{$row['addressline1']}</td>
                        <td id = \"addressline2\" name= \"addressline2\" class = \"tablefield\" disabled>{$row['addressline2']}</td>
                        <td id = \"town\" name= \"town\"  class = \"tablefield\" disabled>{$row['town']}</td>
                        <td id = \"county\" name= \"county\" class = \"tablefield\" disabled>{$row['county']}</td>

                        <td id = \"postcode\" name= \"postcode\" class = \"tablefield\" disabled>{$row['postcode']}</td>
                        <td id = \"country\" name= \"country\" class = \"tablefield\" disabled>{$row['country']}</td>
                    </tr>
                                ";
    }
} else {
    echo '<option> No Result Found </option>';
}
?>