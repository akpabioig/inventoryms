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
$count1 = $result1->fetch_array();
    echo $count1[0] + '\n';
    echo $count1[1] + '\n';
    echo $count1[2] + '\n';
    echo $count1[3] + '\n';
    echo $count1[4] + '\n';
    echo $count1[5] + '\n';
    echo $count1[6] + '\n';


?>