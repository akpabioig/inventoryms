<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 17/05/2016
 * Time: 12:32
 */

include('connection.php');

$sql = "SELECT MONTH(datesales), datesales, sum(totalcost)
        FROM salesorder
        WHERE status = 'fulfilled'
        GROUP BY MONTH(datesales)";
$record = mysqli_query($db, $sql);

while ($row = $record->fetch_array()) {
    echo "{$row[0]} \n";
}
?>