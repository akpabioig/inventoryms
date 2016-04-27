1<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 18/03/2016
 * Time: 14:22
 */


define('DBSERVER', 'us-cdbr-azure-southcentral-e.cloudapp.net');
define('DBUSER', 'bee886bc8793e7');
define('DBPASSWORD', '362289e3');
define('DBNAME', 'inventoryms');

$db = mysqli_connect(DBSERVER, DBUSER, DBPASSWORD, DBNAME);
$db = mysqli_connect("us-cdbr-azure-southcentral-e.cloudapp.net", "bee886bc8793e7", "362289e3", "inventoryms");


?>
