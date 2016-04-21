<?php
    $db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    if(isset($_GET['prodid'])){
        $prodId = $_GET['prodid'];

        try {
            $sql = "DELETE FROM addproduct
                    WHERE productid = {$prodId}";
            $sth = $db->query($sql);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        header("Location: productseditor.php");


    }else{
        header("Location: productseditor.php");
    }

if (isset($_GET['custid'])) {
    $customerId = $_GET['custid'];

    try {
        $sql1 = "DELETE FROM addcustomer
                        WHERE customerid = {$customerId}";
        $sth1 = $db->query($sql1);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("Location: customerseditor.php");

} else {
    header("Location: customerseditor.php");
}

if (isset($_GET['suppid'])) {
    $supplierId = $_GET['suppid'];

    try {
        $sql2 = "DELETE FROM addsupplier
                            WHERE supplierid = {$supplierId}";
        $sth2 = $db->query($sql2);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("Location: supplierseditor.php");


} else {
    header("Location: supplierseditor.php");
}

?>