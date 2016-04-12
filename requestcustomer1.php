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
                        <td><input type=\"text\" id = \"customerid\" name= \"customerid\"  value = \"{$row['customerid']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"customertype\" name= \"customertype\"  value = \"{$row['customertype']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"customername\" name= \"customername\"  value = \"{$row['customername']}\" class = \"tablefield\" disabled></td>

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
                    </tr>
                                ";
    }
} else {
    echo '<option> No Result Found </option>';
}
?>