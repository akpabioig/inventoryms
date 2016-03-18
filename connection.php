<?php
/**
 * Created by PhpStorm.
 * User: hackathon
 * Date: 18/03/2016
 * Time: 14:22
 */


define('DBSERVER', 'localhost');
define('DBUSER', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'inventoryms');

$db = mysqli_connect(DBSERVER, DBUSER, DBPASSWORD, DBNAME);



?>