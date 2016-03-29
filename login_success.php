
<?php
if($_GET['s']){
    echo "<script>";
    echo "document.write(alert('Login Successful'))";
    echo "</script>";
    header("Location: homepage.php"); //load the homepage
}


?>