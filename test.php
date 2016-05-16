<script>
    var names = ["productlocation[]", "productname[]", "quantity[]", "itemcost[]", "tax[]", "itemtotal[]"];
    function add(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        var colCount = table.rows[0].cells.length;
        for (var i = 0; i < colCount; i++) {
            //Creating select for the second column
            if (i === 1) {
                var newcell = row.insertCell(i);
                var newentry = document.createElement('select');
                //var options = new Option(myList., 'value', false, false);
                for (var j = 0; j < myList.length; j++) {
                    var opt = myList[j];
                    var opt_val = myValues[j];
                    var el = new Option(opt, opt_val, false, false);
                    newentry.appendChild(el);
                    newentry.name = names[j];
                    newentry.type = "text";
                    newcell.appendChild(newentry);
                }
                continue;
            }
            var newcell = row.insertCell(i);
            var newentry = document.createElement('input');
            newentry.name = names[i]; //add
            newentry.type = "text";
            newcell.appendChild(newentry);

        }
    }
</script>

$sql= "SELECT productname, productid FROM addproduct";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

while($row = $result -> fetch_array()){
//echo '
<option value="'.$row['productid'].'">';
    //echo $row['productname'];
    echo '
    <script type="application/javascript">';
        echo
        'myList.push("'.$row["productname"].
        '");';
        echo
        'myValues.push('.$row["productid"].
        ');';
        echo
        '</script>
    ';
    //echo '
</option>';
}
}else{
echo '
<option> No Result Found</option>';

echo '
<script type="application/javascript">';
    echo
    'var myList = [];';
    echo
    'var myValues = [];';
    echo
    '</script>';
