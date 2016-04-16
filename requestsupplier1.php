<?php include('connection.php');
if (isset($_POST['sortsupplier'])) {
    if ($_POST['sortsupplier'] == "supplierid") {
        $sql = "SELECT supplierid, suppliername, contactperson, contactpersontel, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addsupplier
                          ORDER BY supplierid";
    } else if ($_POST['sortsupplier'] == "suppliername") {
        $sql = "SELECT supplierid, suppliername, contactperson, contactpersontel, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addsupplier
                          ORDER BY suppliername";
    } else if ($_POST['sortsupplier'] == "country") {
        $sql = "SELECT supplierid, suppliername, contactperson, contactpersontel, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addsupplier
                          ORDER BY country";
    }
} else {
    $sql = "SELECT supplierid, suppliername, contactperson, contactpersontel, telnumber, fax, email, url, description,
                      addressline1, addressline2, town, county, postcode, country
                          FROM addsupplier";
}
//Work bitch
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
    while ($row = $result->fetch_array()) {
        echo "
                                          <tr>
                        <td id = \"supplierid\" name= \"supplierid\" class = \"tablefield\" disabled>{$row['supplierid']}</td>
                        <td id = \"suppliername\" name= \"suppliername\" class = \"tablefield\" disabled>{$row['suppliername']}</td>
                        <td id = \"contactperson\" name= \"contactperson\" class = \"tablefield\" disabled>{$row['contactperson']}</td>
                        <td id = \"contactpersontel\" name= \"contactpersontel\" class = \"tablefield\" disabled>{$row['contactpersontel']}</td>
                        <td id = \"telnumber\" name= \"telnumber\" class = \"tablefield\" disabled> {$row['telnumber']} </td>
                        <td id = \"fax\" name= \"fax\" class = \"tablefield\" disabled>{$row['fax']}</td>
                        <td id = \"email\" name= \"email\" class = \"tablefield\" disabled> {$row['email']} </td>
                        <td id = \"url\" name= \"url\" class = \"tablefield\" disabled>{$row['url']}</td>
                        <td id = \"description\" name= \"description\"  class = \"tablefield\" disabled> {$row['description']}</td>
                        <td id = \"addressline1\" name= \"addressline1\" class = \"tablefield\" disabled> {$row['addressline1']} </td>
                        <td id = \"addressline2\" name= \"addressline2\" class = \"tablefield\" disabled> {$row['addressline2']} </td>
                        <td id = \"town\" name= \"town\" class = \"tablefield\" disabled> {$row['town']} </td>
                        <td id = \"county\" name= \"county\" class = \"tablefield\" disabled> {$row['county']} </td>
                        <td id = \"postcode\" name= \"postcode\" class = \"tablefield\" disabled> {$row['postcode']} </td>
                        <td id = \"country\" name= \"country\" class = \"tablefield\" disabled> {$row['country']} </td>
                    </tr>

                                ";
    }
} else {
    echo '<option> No Result Found </option>';
}
?>