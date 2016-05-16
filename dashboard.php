<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<?php
include('connection.php');

$query1 = "select * from dashboard_totals";
$result1 = mysqli_query($db, $query1);
while($count1 = $result1->fetch_array()){
    echo $count1[0] + 'ijnjknjkn';
}



?>